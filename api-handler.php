<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { exit(0); }
require_once __DIR__ . '/include/dbcommon.php';
$runnerConnection = DB::DefaultConnection();
$conn = $runnerConnection ? $runnerConnection->conn : null;
if (!$conn instanceof mysqli) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Koneksi database tidak tersedia']);
    exit;
}
$conn->set_charset('utf8mb4');

// ── AMBIL CONFIG SMTP DARI PHPRUNNER ──────────────────────────────
require_once __DIR__ . '/libs/phpmailer/class.phpmailer.php';
require_once __DIR__ . '/libs/phpmailer/class.smtp.php';
// Config SMTP langsung, tidak perlu appsettings.php
$globalSettings = [
    'strSMTPServer'   => 'mail.baramultigroup.co.id',
    'strSMTPPort'     => '465',
    'strSMTPUser'     => 'noreply_ticketsumsel@baramultigroup.co.id',
    'strSMTPPassword' => '#T!cketing4390',
    'strFromEmail'    => 'noreply_ticketsumsel@baramultigroup.co.id',
    'SMTPSecure'      => 'ssl',
];

define('APP_NAME',  'Sumsel Ticketing');
define('APP_URL',   'http://' . $_SERVER['HTTP_HOST']);
function getAdminEmails() {
    $emails = [];

    $sql = "
        SELECT u.email, u.nama
        FROM tbl_users u
        INNER JOIN `sumsel-ticketingugmembers` m ON u.nik = m.UserName
        INNER JOIN `sumsel-ticketinguggroups` g ON m.GroupID = g.GroupID
        WHERE g.Label = 'superadmin'
    ";

    $rs = DB::Query($sql);

    while ($data = $rs->fetchAssoc()) {
        $emails[] = $data['email'];
    }

    return $emails;
} 
// Tambahkan fungsi ini untuk cek apakah user adalah superadmin
function isSuperAdmin($nik) {
    global $conn; 
    
    $sql = "
        SELECT COUNT(*) as total
        FROM tbl_users u
        INNER JOIN `sumsel-ticketingugmembers` m ON u.nik = m.UserName
        INNER JOIN `sumsel-ticketinguggroups` g ON m.GroupID = g.GroupID
        WHERE g.Label = 'superadmin' AND u.nik = '" . $conn->real_escape_string($nik) . "'
    ";
    
    $rs = DB::Query($sql);
    $data = $rs->fetchAssoc();
    return ($data['total'] ?? 0) > 0;
}

// ── NORMALISASI SBU ────────────────────────────────────────────────
function resolveSbuCode($value) {
    global $conn;

    $value = trim((string) $value);
    if ($value === '') {
        return '';
    }

    $valueEsc = $conn->real_escape_string($value);
    $sql = "
        SELECT CODE
        FROM tbl_code_list
        WHERE CatID = 'SBU'
          AND (
            LOWER(CODE) = LOWER('$valueEsc')
            OR LOWER(Description) = LOWER('$valueEsc')
          )
        ORDER BY OrderNo
        LIMIT 1
    ";

    $rs = $conn->query($sql);
    if ($rs && $row = $rs->fetch_assoc()) {
        return $row['CODE'];
    }

    return $value;
}

function normalizeTicketPhoneNumber($value) {
    $value = trim((string) $value);
    if ($value === '') {
        return '';
    }

    $digits = preg_replace('/\D/', '', $value);
    if ($digits === '') {
        return '';
    }

    if (strpos($digits, '0') === 0) {
        return '+62' . substr($digits, 1);
    }

    if (strpos($digits, '62') === 0) {
        return '+' . $digits;
    }

    if (strpos($digits, '8') === 0) {
        return '+62' . $digits;
    }

    return '+' . $digits;
}

// ── FUNGSI KIRIM EMAIL (pakai config PHPRunner) ───────────────────
function kirimEmail($to, $to_name, $subject, $body_html, $cc = [], $extra_to = []) {
    global $globalSettings;

    $mail = new PHPMailer();
    $mail->CharSet   = 'UTF-8';
    $mail->SMTPDebug = 0;

    $smtpHost   = $globalSettings['strSMTPServer']   ?? 'localhost';
    $smtpPort   = (int)($globalSettings['strSMTPPort'] ?? 25);
    $smtpUser   = $globalSettings['strSMTPUser']     ?? '';
    $smtpPass   = $globalSettings['strSMTPPassword'] ?? '';
    $fromMail   = $globalSettings['strFromEmail']    ?? 'noreply@' . $_SERVER['HTTP_HOST'];
    $smtpSecure = $globalSettings['SMTPSecure']      ?? (($smtpPort == 465) ? 'ssl' : 'tls');

    if (!empty($smtpUser)) {
        $mail->IsSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = $smtpSecure;
        $mail->Host       = $smtpHost;
        $mail->Port       = $smtpPort;
        $mail->Username   = $smtpUser;
        $mail->Password   = $smtpPass;
    } else {
        $mail->IsMail();
    }

    $mail->SetFrom($fromMail, APP_NAME);
    $mail->AddAddress($to, $to_name);

    // Tambahan To (untuk multiple admin)
    foreach ($extra_to as $extra_email) {
        $mail->AddAddress($extra_email, 'Admin');
    }

    // CC dari database
    foreach ($cc as $cc_email) {
        $mail->AddCC($cc_email);
    }

    $mail->Subject = $subject;
    $mail->MsgHTML($body_html);
    $mail->IsHTML(true);

    if (!$mail->Send()) {
        error_log('[' . APP_NAME . '] Gagal kirim email ke ' . $to . ': ' . $mail->ErrorInfo);
        return false;
    }
    return true;
}

// ── FUNGSI NOTIFIKASI TIKET ───────────────────────────────────────
function sendEmailNotification($req_id, $requestor_data, $penumpang_list, $mode = 'tiket', $old_req_id = '') {
    global $conn;

    $nama_pemesan    = $requestor_data['nama_pemesan'];
    $email_pemesan   = $requestor_data['email_pemesan'];
    $no_telp         = $requestor_data['no_telp_pemesan'];
    $beban_sbu       = $requestor_data['beban_sbu'];
    $nik             = $requestor_data['nik_pemesan'];
    $atasan_langsung = $requestor_data['atasan_langsung'] ?? '';
    $alasan          = $requestor_data['alasan'] ?? '';
    $is_rsc          = ($mode === 'reschedule');

    // ── Ambil nama SBU ────────────────────────────────────────────
    $beban_esc  = $conn->real_escape_string($beban_sbu);
    $res_sbu    = $conn->query("SELECT Description FROM tbl_code_list WHERE CatID = 'SBU' AND Code = '$beban_esc' LIMIT 1");
    $tampil_sbu = $beban_sbu;
    if ($res_sbu && $row_sbu = $res_sbu->fetch_assoc()) {
        if (!empty($row_sbu['Description'])) $tampil_sbu = $row_sbu['Description'];
    }

    $base_url  = rtrim(APP_URL, '/');
    $cek_link  = $base_url . '/cek-status.php?req_id=' . urlencode($req_id);

    // ── Variabel yang beda antara tiket vs reschedule ─────────────
    if ($is_rsc) {
        $subject_requestor = '[' . APP_NAME . '] Pengajuan Reschedule Berhasil - ' . $req_id;
        $subject_admin     = '[' . APP_NAME . '] Pengajuan Reschedule Baru - ' . $req_id;
        $hdr_gradient      = 'linear-gradient(135deg,#d97706 0%,#f59e0b 100%)';
        $hdr_icon          = '🔄';
        $hdr_title         = 'Reschedule Tiket Berhasil';
        $hdr_subtitle      = 'Permohonan reschedule Anda sedang diproses oleh admin';
        $hdr_subcolor      = '#fef3c7';
        $badge_bg          = '#fffbeb';
        $badge_border      = '#fbbf24';
        $badge_color       = '#d97706';
        $badge_label       = 'Nomor Reschedule';
        $badge_hint        = 'Gunakan nomor ini untuk memantau status reschedule Anda';
        $intro_text        = "Pengajuan reschedule untuk tiket <strong>$old_req_id</strong> telah berhasil kami terima. Berikut ringkasan pengajuan reschedule Anda:";
        $extra_info        = "<div style='background:#fef3c7;border:1px solid #fde68a;border-radius:10px;padding:12px 16px;margin-bottom:28px;font-size:13px;color:#92400e'>
                                <strong>Nomor Pengajuan Awal:</strong> $old_req_id &nbsp;→&nbsp; status diubah menjadi <em>Reschedule Requested</em>
                              </div>";
        $detail_badge_bg   = '#fef3c7';
        $detail_badge_clr  = '#d97706';
        $detail_label      = 'Detail Penumpang &amp; Penerbangan Baru';
        $cek_label         = 'Pantau Status Reschedule Anda';
        $cek_btn           = '🔍 Cek Status Reschedule';
        $cek_link_clr      = '#d97706';
        $nomor_badge_bg    = '#d97706';
        $admin_intro       = 'Mohon bookingkan ulang tiket untuk pengajuan reschedule berikut:';
        $admin_no_label    = "<p style='font-size:14px;margin:0 0 4px'><strong>No. Reschedule:</strong> $req_id</p>
                              <p style='font-size:14px;margin:0 0 20px;color:#6b7280'><strong>Menggantikan:</strong> $old_req_id</p>";
    } else {
        $subject_requestor = '[' . APP_NAME . '] Pengajuan Tiket Berhasil - ' . $req_id;
        $subject_admin     = '[' . APP_NAME . '] Pengajuan Tiket Baru - ' . $req_id;
        $hdr_gradient      = 'linear-gradient(135deg,#4338ca 0%,#6366f1 100%)';
        $hdr_icon          = '🎫';
        $hdr_title         = 'Pengajuan Tiket Berhasil';
        $hdr_subtitle      = 'Tiket Anda sedang diproses oleh admin';
        $hdr_subcolor      = '#c7d2fe';
        $badge_bg          = '#eef2ff';
        $badge_border      = '#818cf8';
        $badge_color       = '#4338ca';
        $badge_label       = 'Nomor Tiket';
        $badge_hint        = 'Simpan nomor ini untuk cek status pengajuan';
        $intro_text        = 'Pengajuan tiket Anda telah berhasil diterima. Berikut ringkasan pengajuan Anda:';
        $extra_info        = '';
        $detail_badge_bg   = '#e0e7ff';
        $detail_badge_clr  = '#4338ca';
        $detail_label      = 'Detail Penumpang &amp; Penerbangan';
        $cek_label         = 'Pantau Status Pengajuan Anda';
        $cek_btn           = '🔍 Cek Status Tiket';
        $cek_link_clr      = '#4338ca';
        $nomor_badge_bg    = '#4338ca';
        $admin_intro       = 'Mohon bookingkan tiket dengan detail berikut:';
        $admin_no_label    = "<p style='font-size:14px;margin:0 0 20px'><strong>No. Pengajuan:</strong> $req_id</p>";
    }

    // ── BUILD PENUMPANG ROWS (email requestor) ────────────────────
    $penumpang_rows = '';
    foreach ($penumpang_list as $i => $pt) {
        $dari_arr   = explode(' — ', $pt['bandara_asal'] ?? '');
        $ke_arr     = explode(' — ', $pt['bandara_tujuan'] ?? '');
        $asal       = $dari_arr[1] ?? $dari_arr[0] ?? 'N/A';
        $tujuan     = $ke_arr[1]   ?? $ke_arr[0]   ?? 'N/A';
        $tgl_pt     = isset($pt['tanggal_penerbangan']) ? date('d M Y', strtotime($pt['tanggal_penerbangan'])) : 'N/A';
        $jam_pt     = isset($pt['waktu_berangkat']) ? substr($pt['waktu_berangkat'], 0, 5) : 'N/A';
        $jam_tiba   = isset($pt['waktu_tiba'])      ? substr($pt['waktu_tiba'], 0, 5)      : '';
        $msk        = $pt['maskapai']      ?? 'N/A';
        $nama_pt    = htmlspecialchars($pt['nama_penumpang']   ?? 'N/A');
        $posisi_pt  = htmlspecialchars($pt['posisi_penumpang'] ?? '');
        $gender_pt  = $pt['gender'] ?? '';
        $catatan_pt = $pt['catatan_khusus'] ?? '';
        $is_rt      = ($pt['tipe_perjalanan'] ?? '') === 'Round Trip';

        $rt_block = '';
        if ($is_rt && !empty($pt['bandara_asal_p'])) {
            $dari_p_arr = explode(' — ', $pt['bandara_asal_p']);
            $ke_p_arr   = explode(' — ', $pt['bandara_tujuan_p'] ?? '');
            $asal_p     = $dari_p_arr[1] ?? $dari_p_arr[0] ?? 'N/A';
            $tujuan_p   = $ke_p_arr[1]   ?? $ke_p_arr[0]   ?? 'N/A';
            $tgl_p      = isset($pt['tanggal_penerbangan_p']) ? date('d M Y', strtotime($pt['tanggal_penerbangan_p'])) : 'N/A';
            $jam_p      = isset($pt['waktu_berangkat_p']) ? substr($pt['waktu_berangkat_p'], 0, 5) : 'N/A';
            $jam_tiba_p = isset($pt['waktu_tiba_p'])      ? substr($pt['waktu_tiba_p'], 0, 5)      : '';
            $msk_p      = $pt['maskapai_p'] ?? 'N/A';
            $cat_p      = $pt['catatan_khusus_p'] ?? '';

            $rt_block = "
            <tr><td colspan='2' style='padding:0'><div style='margin:10px 0 6px;border-top:1px dashed #e5e7eb'></div></td></tr>
            <tr><td colspan='2' style='padding:4px 0 8px'>
                <span style='display:inline-block;background:#ecfdf5;color:#059669;font-size:11px;font-weight:bold;padding:3px 10px;border-radius:20px'>↩ PULANG</span>
            </td></tr>
            <tr>
                <td style='padding:5px 0;color:#6b7280;font-size:13px;width:130px'>Rute</td>
                <td style='padding:5px 0;font-size:13px;font-weight:600'>$asal_p - $tujuan_p</td>
            </tr>
            <tr>
                <td style='padding:5px 0;color:#6b7280;font-size:13px'>Tanggal</td>
                <td style='padding:5px 0;font-size:13px'>$tgl_p</td>
            </tr>
            <tr>
                <td style='padding:5px 0;color:#6b7280;font-size:13px'>Waktu</td>
                <td style='padding:5px 0;font-size:13px'>$jam_p" . ($jam_tiba_p ? " – $jam_tiba_p" : '') . "</td>
            </tr>
            <tr>
                <td style='padding:5px 0;color:#6b7280;font-size:13px'>Maskapai</td>
                <td style='padding:5px 0;font-size:13px'>$msk_p</td>
            </tr>
            " . ($cat_p ? "<tr><td style='padding:5px 0;color:#6b7280;font-size:13px'>Catatan</td><td style='padding:5px 0;font-size:13px;color:#b45309'>$cat_p</td></tr>" : '') . "
            ";
        }

        $no       = $i + 1;
        $badge_rt = $is_rt
            ? "<span style='background:#eef2ff;color:#4338ca;font-size:11px;font-weight:bold;padding:3px 10px;border-radius:20px'>Round Trip</span>"
            : "<span style='background:#f0fdf4;color:#15803d;font-size:11px;font-weight:bold;padding:3px 10px;border-radius:20px'>One Way</span>";

        $penumpang_rows .= "
        <div style='margin-bottom:16px;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden'>
          <div style='background:#f3f4f6;padding:12px 16px'>
            <table style='width:100%;border-collapse:collapse'>
              <tr>
                <td style='width:34px;vertical-align:middle'>
                  <div style='background:$nomor_badge_bg;color:white;border-radius:50%;width:26px;height:26px;text-align:center;line-height:26px;font-size:12px;font-weight:bold'>$no</div>
                </td>
                <td style='vertical-align:middle'>
                  <div style='font-weight:700;font-size:15px;color:#1f2937'>$nama_pt</div>
                  <div style='font-size:12px;color:#6b7280'>$posisi_pt" . ($gender_pt ? " &nbsp;·&nbsp; $gender_pt" : '') . "</div>
                </td>
                <td style='text-align:right;vertical-align:middle'>$badge_rt</td>
              </tr>
            </table>
          </div>
          <div style='padding:14px 16px'>
            <table style='width:100%;border-collapse:collapse'>
              <tr><td colspan='2' style='padding:4px 0 8px'>
                <span style='display:inline-block;background:$badge_bg;color:$badge_color;font-size:11px;font-weight:bold;padding:3px 10px;border-radius:20px'>✈ PERGI</span>
              </td></tr>
              <tr>
                <td style='padding:5px 0;color:#6b7280;font-size:13px;width:130px'>Rute</td>
                <td style='padding:5px 0;font-size:13px;font-weight:600'>$asal → $tujuan</td>
              </tr>
              <tr>
                <td style='padding:5px 0;color:#6b7280;font-size:13px'>Tanggal</td>
                <td style='padding:5px 0;font-size:13px'>$tgl_pt</td>
              </tr>
              <tr>
                <td style='padding:5px 0;color:#6b7280;font-size:13px'>Waktu</td>
                <td style='padding:5px 0;font-size:13px'>$jam_pt" . ($jam_tiba ? " – $jam_tiba" : '') . "</td>
              </tr>
              <tr>
                <td style='padding:5px 0;color:#6b7280;font-size:13px'>Maskapai</td>
                <td style='padding:5px 0;font-size:13px'>$msk</td>
              </tr>
              " . ($catatan_pt ? "<tr><td style='padding:5px 0;color:#6b7280;font-size:13px'>Catatan</td><td style='padding:5px 0;font-size:13px;color:#b45309'>$catatan_pt</td></tr>" : '') . "
              $rt_block
            </table>
          </div>
        </div>";
    }

    // ── EMAIL KE REQUESTOR ────────────────────────────────────────
    $body_requestor = "
    <html><head><meta charset='UTF-8'></head>
    <body style='margin:0;padding:0;background:#f3f4f6;font-family:Arial,sans-serif'>
      <div style='max-width:620px;margin:32px auto;background:#ffffff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08)'>
        <div style='background:$hdr_gradient;padding:36px 32px;text-align:center'>
          <div style='font-size:36px;margin-bottom:8px'>$hdr_icon</div>
          <h1 style='margin:0;color:#ffffff;font-size:22px;font-weight:700'>$hdr_title</h1>
          <p style='margin:8px 0 0;color:$hdr_subcolor;font-size:14px'>$hdr_subtitle</p>
        </div>
        <div style='padding:28px 32px'>
          <p style='margin:0 0 20px;font-size:15px;color:#374151'>Halo <strong>" . htmlspecialchars($nama_pemesan) . "</strong>,</p>
          <p style='margin:0 0 24px;font-size:14px;color:#6b7280;line-height:1.6'>$intro_text</p>
          <div style='background:$badge_bg;border:2px dashed $badge_border;border-radius:12px;padding:18px;text-align:center;margin-bottom:28px'>
            <div style='font-size:12px;color:$badge_color;font-weight:600;letter-spacing:.1em;text-transform:uppercase;margin-bottom:6px'>$badge_label</div>
            <div style='font-size:26px;font-weight:700;color:$badge_color;letter-spacing:.05em'>$req_id</div>
            <div style='font-size:12px;color:#9ca3af;margin-top:4px'>$badge_hint</div>
          </div>
          $extra_info
          <div style='font-size:11px;font-weight:700;color:#9ca3af;text-transform:uppercase;letter-spacing:.1em;margin-bottom:12px'>Data Pemohon</div>
          <table style='width:100%;border-collapse:collapse;background:#f9fafb;border-radius:10px;overflow:hidden;margin-bottom:28px'>
            <tr style='border-bottom:1px solid #e5e7eb'>
              <td style='padding:10px 14px;font-size:13px;color:#6b7280;width:140px'>Nama</td>
              <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#1f2937'>" . htmlspecialchars($nama_pemesan) . "</td>
            </tr>
            <tr style='border-bottom:1px solid #e5e7eb'>
              <td style='padding:10px 14px;font-size:13px;color:#6b7280'>NIK</td>
              <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#1f2937'>$nik</td>
            </tr>
            <tr style='border-bottom:1px solid #e5e7eb'>
              <td style='padding:10px 14px;font-size:13px;color:#6b7280'>No. Telepon</td>
              <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#1f2937'>$no_telp</td>
            </tr>
            <tr>
              <td style='padding:10px 14px;font-size:13px;color:#6b7280'>Beban SBU</td>
              <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#1f2937'>$beban_sbu</td>
            </tr>
          </table>
          <div style='font-size:11px;font-weight:700;color:#9ca3af;text-transform:uppercase;letter-spacing:.1em;margin-bottom:12px'>
            $detail_label
            <span style='background:$detail_badge_bg;color:$detail_badge_clr;font-size:10px;padding:2px 8px;border-radius:10px;margin-left:6px'>" . count($penumpang_list) . " Orang</span>
          </div>
          $penumpang_rows
          <div style='background:#f0fdf4;border:1.5px solid #86efac;border-radius:12px;padding:20px;text-align:center;margin-top:28px'>
            <div style='font-size:14px;font-weight:600;color:#166534;margin-bottom:12px'>$cek_label</div>
            <a href='$cek_link' style='display:inline-block;background:#059669;color:#ffffff;text-decoration:none;padding:12px 28px;border-radius:8px;font-size:14px;font-weight:700'>$cek_btn</a>
            <div style='font-size:12px;color:#6b7280;margin-top:10px'>atau buka: <a href='$cek_link' style='color:$cek_link_clr;word-break:break-all'>$cek_link</a></div>
          </div>
        </div>
        <div style='background:#f9fafb;border-top:1px solid #e5e7eb;padding:20px 32px;text-align:center'>
          <p style='margin:0 0 4px;font-size:12px;color:#9ca3af'>Email ini adalah notifikasi otomatis. Jangan balas email ini.</p>
          <p style='margin:0;font-size:12px;color:#9ca3af'>&copy; " . date('Y') . " " . APP_NAME . " &mdash; Sistem Pemesanan Tiket</p>
        </div>
      </div>
    </body></html>";

    // ── EMAIL KE ADMIN ────────────────────────────────────────────
    $ccEmails = [];
    $res_cc   = $conn->query("SELECT Description FROM tbl_code_list WHERE CatID = 'email_cc' AND Code = '$beban_esc' AND Active = 1");
    if ($res_cc) {
        while ($row_cc = $res_cc->fetch_assoc()) {
            if (!empty($row_cc['Description'])) $ccEmails[] = $row_cc['Description'];
        }
    }

    $detail_admin_rows = '';
    foreach ($penumpang_list as $i => $p) {
        $gender_pt = $p['gender'] ?? '';
        $sapaan    = ($gender_pt === 'Perempuan') ? 'Ibu' : 'Bpk';
        $nama_pt   = htmlspecialchars($p['nama_penumpang'] ?? '');
        $telp_pt   = htmlspecialchars($p['no_telp_penumpang'] ?? '');
        $nik_pt    = htmlspecialchars($p['nik_ktp'] ?? '');
        $nik_kar   = $p['nik_penumpang'] ?? '';

        $gff_pt = '';
        if (!empty($nik_kar)) {
            $nik_safe = addslashes($nik_kar);
            $res_gff  = CustomQuery("SELECT gff FROM tbl_data_penumpang WHERE nik = '$nik_safe' LIMIT 1");
            $row_gff  = db_fetch_array($res_gff);
            if (!empty($row_gff['gff'])) $gff_pt = htmlspecialchars($row_gff['gff']);
        }
        $gff_display_pt = !empty($gff_pt) ? " | GFF: $gff_pt" : '';

        $jam_tiba_pt = isset($p['waktu_tiba']) ? substr($p['waktu_tiba'], 0, 5) : '';
        $dari_arr    = explode(' — ', $p['bandara_asal'] ?? '');
        $ke_arr      = explode(' — ', $p['bandara_tujuan'] ?? '');
        $asal        = $dari_arr[1] ?? $dari_arr[0] ?? 'N/A';
        $tujuan      = $ke_arr[1]   ?? $ke_arr[0]   ?? 'N/A';
        $tgl_pt      = isset($p['tanggal_penerbangan']) ? date('d F Y', strtotime($p['tanggal_penerbangan'])) : 'N/A';
        $jam_pt      = isset($p['waktu_berangkat']) ? substr($p['waktu_berangkat'], 0, 5) : 'N/A';
        $msk_pt      = htmlspecialchars($p['maskapai'] ?? '');
        $jam_range_pt = $jam_pt . (!empty($jam_tiba_pt) ? " - $jam_tiba_pt" : '');

        $baris_pulang = '';
        if (($p['tipe_perjalanan'] ?? '') === 'Round Trip' && !empty($p['bandara_asal_p'])) {
            $dari_p      = explode(' — ', $p['bandara_asal_p']);
            $ke_p        = explode(' — ', $p['bandara_tujuan_p'] ?? '');
            $asal_p      = $dari_p[1] ?? $dari_p[0] ?? 'N/A';
            $tujuan_p    = $ke_p[1]   ?? $ke_p[0]   ?? 'N/A';
            $tgl_p       = isset($p['tanggal_penerbangan_p']) ? date('d F Y', strtotime($p['tanggal_penerbangan_p'])) : 'N/A';
            $jam_p       = isset($p['waktu_berangkat_p']) ? substr($p['waktu_berangkat_p'], 0, 5) : 'N/A';
            $jam_tiba_p  = isset($p['waktu_tiba_p']) ? substr($p['waktu_tiba_p'], 0, 5) : '';
            $msk_p       = htmlspecialchars($p['maskapai_p'] ?? '');
            $jam_range_p = $jam_p . (!empty($jam_tiba_p) ? " - $jam_tiba_p" : '');

            $baris_pulang = "
            <tr><td style='padding:2px 0;font-size:14px;color:#374151'>
                $asal_p - $tujuan_p tgl. $tgl_p ($jam_range_p $msk_p)
            </td></tr>";
        }

        $detail_admin_rows .= "
        <tr>
            <td style='padding:12px 0;border-bottom:1px solid #e5e7eb'>
                <table style='width:100%;border-collapse:collapse'>
                    <tr><td style='padding:0 0 4px'>
                        <strong style='font-size:14px;color:#1f2937'>$sapaan. $nama_pt ($nik_pt$gff_display_pt)</strong>
                    </td></tr>
                    <tr><td style='padding:2px 0;font-size:14px;color:#374151'>
                        $asal - $tujuan tgl. $tgl_pt ($jam_range_pt $msk_pt)
                    </td></tr>
                    $baris_pulang
                    <tr><td style='padding:4px 0 2px;font-size:13px;color:#374151'>No. Telp $telp_pt</td></tr>
                    <tr><td style='padding:2px 0;font-size:13px;color:#374151'>Beban biaya " . htmlspecialchars($tampil_sbu) . "</td></tr>
                </table>
            </td>
        </tr>";
    }

    $body_admin = "
    <html><head><meta charset='UTF-8'></head>
    <body style='margin:0;padding:0;font-family:Arial,sans-serif;color:#1f2937'>
      <div style='max-width:620px;margin:32px auto;padding:0 16px'>
        <p style='font-size:15px;margin:0 0 16px'>$admin_intro</p>
        $admin_no_label
        <table style='width:100%;border-collapse:collapse;margin-bottom:20px'>$detail_admin_rows</table>
        <table style='width:100%;border-collapse:collapse'>
            <tr>
                <td style='padding:6px 0;font-size:14px;width:100px;color:#6b7280'>Pemohon</td>
                <td style='padding:6px 0;font-size:14px'>: " . htmlspecialchars($nama_pemesan) . "</td>
            </tr>
            <tr>
                <td style='padding:6px 0;font-size:14px;color:#6b7280'>Atasan</td>
                <td style='padding:6px 0;font-size:14px'>: " . htmlspecialchars($atasan_langsung) . "</td>
            </tr>
            <tr>
                <td style='padding:6px 0;font-size:14px;color:#6b7280'>Keperluan</td>
                <td style='padding:6px 0;font-size:14px'>: " . htmlspecialchars($alasan) . "</td>
            </tr>
        </table>
        <p style='font-size:12px;color:#9ca3af;margin-top:32px;border-top:1px solid #e5e7eb;padding-top:16px'>
            &copy; " . date('Y') . " " . APP_NAME . "
        </p>
      </div>
    </body></html>";

    // ── Kirim email ───────────────────────────────────────────────
    if (!empty($email_pemesan) && filter_var($email_pemesan, FILTER_VALIDATE_EMAIL)) {
        kirimEmail($email_pemesan, $nama_pemesan, $subject_requestor, $body_requestor);
    }

    $adminEmails = getAdminEmails();
    error_log('[EMAIL-' . strtoupper($mode) . '] To: ' . implode(', ', $adminEmails) . ' | CC: ' . implode(', ', $ccEmails));
    if (!empty($adminEmails)) {
        $mainAdmin = array_shift($adminEmails);
        kirimEmail($mainAdmin, 'Admin', $subject_admin, $body_admin, $ccEmails, $adminEmails);
    }
}

// ── SISA KODE TIDAK BERUBAH ───────────────────────────────────────
$action = $_GET['action'] ?? $_POST['action'] ?? '';

if ($action === 'get_user') {
    $nik = $conn->real_escape_string($_GET['nik'] ?? '');
    if (!$nik) {
        echo json_encode(['success' => false, 'message' => 'NIK tidak boleh kosong']);
        exit;
    }
    $res = $conn->query("SELECT nik, nama, posisi, sbu, no_hp, email FROM tbl_users WHERE nik = '$nik' AND is_active = 1");
    if ($res && $res->num_rows > 0) {
        echo json_encode(['success' => true, 'data' => $res->fetch_assoc()]);
    } else {
        echo json_encode(['success' => false, 'message' => 'NIK tidak ditemukan']);
    }
    exit;
}

if ($action === 'cek_vip') {
    $nik = $conn->real_escape_string($_GET['nik'] ?? '');
    $res = $conn->query("SELECT COUNT(*) as total FROM tbl_code_list WHERE CatID = 'vip_penumpang' AND Code = '$nik' AND Active = 1");
    $row = $res ? $res->fetch_assoc() : null;
    echo json_encode(['is_vip' => $row && (int)$row['total'] > 0]);
    exit;
}

// ── ACTION: search_penumpang ── TAMBAHKAN DI SINI ─────────────
if ($action === 'search_penumpang') {
    $q = trim($_GET['q'] ?? '');

    if (strlen($q) < 2) {
        echo json_encode(['results' => []]);
        exit;
    }

    $q_esc = $conn->real_escape_string($q);

    $sql = "SELECT nik, nik_ktp, nama, posisi_jabatan, sbu, no_telp, gender, vip
            FROM tbl_data_penumpang
            WHERE active = 1
              AND (
                nik  LIKE '%$q_esc%'
                OR nama LIKE '%$q_esc%'
              )
            ORDER BY nama
            LIMIT 10";

    $rs   = $conn->query($sql);
    if (!$rs) {
        http_response_code(500);
        echo json_encode([
            'results' => [],
            'success' => false,
            'message' => 'Gagal mencari data penumpang'
        ]);
        exit;
    }

    $rows = [];
    while ($row = $rs->fetch_assoc()) {
        $rows[] = $row;
    }

    echo json_encode(['success' => true, 'results' => $rows]);
    exit;
}

if ($action === 'submit_tiket') {
    $raw  = file_get_contents('php://input');
    $data = json_decode($raw, true);

    if (!$data) {
        error_log('[submit_tiket] Data JSON tidak valid: ' . $raw);
        echo json_encode(['success' => false, 'message' => 'Data tidak valid']);
        exit;
    }

    $conn->begin_transaction();
    try {
        // Generate req_id: TKT-YYYYMMDD-XXXX
        $date    = date('Ymd');
        $prefix  = "TKT-$date-";
        $res     = $conn->query("SELECT req_id FROM tbl_pengajuan_ticket_hdr WHERE req_id LIKE '$prefix%' ORDER BY req_id DESC LIMIT 1");
        $seq     = 1;
        if ($res && $res->num_rows > 0) {
            $last = $res->fetch_assoc()['req_id'];
            $seq  = (int) substr($last, -4) + 1;
        }
        $req_id = $prefix . str_pad($seq, 4, '0', STR_PAD_LEFT);

        // Sanitize header
        $hdr = $data['header'];
        $nik_pemesan           = $conn->real_escape_string($hdr['nik_pemesan'] ?? '');
        $nama_pemesan          = $conn->real_escape_string($hdr['nama_pemesan'] ?? '');
        $posisi_pemesan        = $conn->real_escape_string($hdr['posisi_pemesan'] ?? '');
        $sbu_pemesan           = $conn->real_escape_string(resolveSbuCode($hdr['sbu_pemesan'] ?? ''));
        $no_telp_pemesan       = $conn->real_escape_string(normalizeTicketPhoneNumber($hdr['no_telp_pemesan'] ?? ''));
        $email_pemesan         = $conn->real_escape_string($hdr['email_pemesan'] ?? '');
        $jenis_pengajuan       = $conn->real_escape_string($hdr['jenis_pengajuan'] ?? 'Dinas');
        $alasan                = $conn->real_escape_string($hdr['alasan'] ?? '');
        $beban_sbu             = $conn->real_escape_string($hdr['beban_sbu'] ?? '');
        $atasan_langsung       = $conn->real_escape_string($hdr['atasan_langsung'] ?? '');
        $create_by             = $conn->real_escape_string($hdr['nama_pemesan'] ?? 'system');
        $now                   = date('Y-m-d H:i:s');

        $sql_hdr = "INSERT INTO tbl_pengajuan_ticket_hdr
            (req_id, nik_pemesan, nama_pemesan, posisi_pemesan, sbu_pemesan, no_telp_pemesan,
             email_pemesan, jenis_pengajuan, alasan, beban_sbu,
             atasan_langsung, status, created_at, create_by)
            VALUES
            ('$req_id', '$nik_pemesan', '$nama_pemesan', '$posisi_pemesan', '$sbu_pemesan',
             '$no_telp_pemesan', '$email_pemesan', '$jenis_pengajuan',
             '$alasan', '$beban_sbu', '$atasan_langsung', '1', '$now', '$create_by')";

        if (!$conn->query($sql_hdr)) {
            throw new Exception('Gagal simpan header: ' . $conn->error);
        }

        // Insert detail (penumpang)
        $penumpang_list = $data['penumpang'] ?? [];
        if (empty($penumpang_list)) {
            throw new Exception('Minimal 1 penumpang harus diisi');
        }

        foreach ($penumpang_list as $p) {

            // ── AUTO-ADD: Cek & tambah ke tbl_data_penumpang jika belum terdaftar ──
            $nik_cek = $conn->real_escape_string($p['nik_penumpang'] ?? '');
            if ($nik_cek) {
                $cek = $conn->query("SELECT nik FROM tbl_data_penumpang WHERE nik = '$nik_cek' LIMIT 1");
                if ($cek && $cek->num_rows === 0) {
                    // Belum ada → insert otomatis
                    $auto_nik_ktp  = $conn->real_escape_string($p['nik_ktp'] ?? '');
                    $auto_nama     = $conn->real_escape_string($p['nama_penumpang'] ?? '');
                    $auto_posisi   = $conn->real_escape_string($p['posisi_penumpang'] ?? '');
                    $auto_sbu      = $conn->real_escape_string($p['sbu_penumpang'] ?? '');
                    $auto_no_telp  = $conn->real_escape_string(preg_replace('/\D/', '', $p['no_telp_penumpang'] ?? ''));
                    $auto_gender   = $conn->real_escape_string($p['gender'] ?? '');

                    $sql_auto = "INSERT INTO tbl_data_penumpang
                        (nik, nik_ktp, nama, posisi_jabatan, sbu, no_telp, gender, vip, active, create_at)
                        VALUES
                        ('$nik_cek', '$auto_nik_ktp', '$auto_nama', '$auto_posisi', '$auto_sbu',
                         '$auto_no_telp', '$auto_gender', 0, 1, '$now')";

                    if (!$conn->query($sql_auto)) {
                        throw new Exception('Gagal auto-add penumpang: ' . $conn->error);
                    }
                }
            }
            // ── END AUTO-ADD ──────────────────────────────────────────────────────

            $nik_penumpang       = $conn->real_escape_string($p['nik_penumpang'] ?? '');
            $nik_ktp             = $conn->real_escape_string($p['nik_ktp'] ?? '');
            $nama_penumpang      = $conn->real_escape_string($p['nama_penumpang'] ?? '');
            $posisi_penumpang    = $conn->real_escape_string($p['posisi_penumpang'] ?? '');
            $sbu_penumpang       = $conn->real_escape_string($p['sbu_penumpang'] ?? '');
            $no_telp_penumpang   = $conn->real_escape_string($p['no_telp_penumpang'] ?? '');
            $gender              = $conn->real_escape_string($p['gender'] ?? '');
            $tipe_perjalanan     = $conn->real_escape_string($p['tipe_perjalanan'] ?? 'One Way');
            $bandara_asal        = $conn->real_escape_string($p['bandara_asal'] ?? '');
            $bandara_tujuan      = $conn->real_escape_string($p['bandara_tujuan'] ?? '');
            $maskapai            = $conn->real_escape_string($p['maskapai'] ?? '');
            $tgl_penerbangan     = $conn->real_escape_string($p['tanggal_penerbangan'] ?? '');
            $waktu_berangkat     = $conn->real_escape_string($p['waktu_berangkat'] ?? '');
            $waktu_tiba          = $conn->real_escape_string($p['waktu_tiba'] ?? '');
            $catatan             = $conn->real_escape_string($p['catatan_khusus'] ?? '');

            // Pulang (round trip)
            $bandara_asal_p      = $conn->real_escape_string($p['bandara_asal_p'] ?? '');
            $bandara_tujuan_p    = $conn->real_escape_string($p['bandara_tujuan_p'] ?? '');
            $maskapai_p          = $conn->real_escape_string($p['maskapai_p'] ?? '');
            $tgl_penerbangan_p   = !empty($p['tanggal_penerbangan_p']) ? "'" . $conn->real_escape_string($p['tanggal_penerbangan_p']) . "'" : 'NULL';
            $waktu_berangkat_p   = !empty($p['waktu_berangkat_p']) ? "'" . $conn->real_escape_string($p['waktu_berangkat_p']) . "'" : 'NULL';
            $waktu_tiba_p        = !empty($p['waktu_tiba_p']) ? "'" . $conn->real_escape_string($p['waktu_tiba_p']) . "'" : 'NULL';
            $catatan_p           = $conn->real_escape_string($p['catatan_khusus_p'] ?? '');

            $sql_dtl = "INSERT INTO tbl_pengajuan_ticket_dtl
                (req_id, nik_penumpang, nik_ktp, nama_penumpang, posisi_penumpang, sbu_penumpang,
                 no_telp_penumpang, gender, tipe_perjalanan, bandara_asal, bandara_tujuan, maskapai,
                 tanggal_penerbangan, waktu_berangkat, waktu_tiba, catatan_khusus,
                 bandara_asal_p, bandara_tujuan_p, maskapai_p,
                 tanggal_penerbangan_p, waktu_berangkat_p, waktu_tiba_p, catatan_khusus_p)
                VALUES
                ('$req_id', '$nik_penumpang', '$nik_ktp', '$nama_penumpang', '$posisi_penumpang',
                 '$sbu_penumpang', '$no_telp_penumpang', '$gender', '$tipe_perjalanan',
                 '$bandara_asal', '$bandara_tujuan', '$maskapai',
                 '$tgl_penerbangan', '$waktu_berangkat', '$waktu_tiba', '$catatan',
                 '$bandara_asal_p', '$bandara_tujuan_p', '$maskapai_p',
                 $tgl_penerbangan_p, $waktu_berangkat_p, $waktu_tiba_p, '$catatan_p')";

            if (!$conn->query($sql_dtl)) {
                throw new Exception('Gagal simpan penumpang: ' . $conn->error);
            }
        }

        $conn->commit();

        // Send email notification
        sendEmailNotification($req_id, $data['header'], $penumpang_list);

        echo json_encode([
            'success' => true,
            'req_id'  => $req_id,
            'message' => 'Pengajuan tiket berhasil disimpan'
        ]);

    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
    exit;
}

if ($action === 'submit_reschedule') {
    $raw  = file_get_contents('php://input');
    $data = json_decode($raw, true);
 
    if (!$data) {
        echo json_encode(['success' => false, 'message' => 'Data tidak valid']);
        exit;
    }
 
    // Validasi user login
    if (!isset($_SESSION['UserID']) || empty($_SESSION['UserID'])) {
        echo json_encode(['success' => false, 'message' => 'Anda harus login untuk mengajukan reschedule']);
        exit;
    }
 
    $old_req_id     = $data['old_req_id'] ?? '';
    $hdr            = $data['header'] ?? [];
    $penumpang_list = $data['penumpang'] ?? [];
 
    // ── FIX: Bandingkan sebagai STRING, bukan integer
    $userNik    = (string) $_SESSION['UserID'];
    $pemohonNik = (string) ($hdr['nik_pemesan'] ?? '');

    $isSuperAdmin = isSuperAdmin($userNik);
    $isOwner = ($userNik === $pemohonNik);
 
    if (!$isSuperAdmin && !$isOwner) {
        echo json_encode(['success' => false, 'message' => 'Anda tidak berhak mengajukan reschedule untuk tiket ini']);
        exit;
    }
 
    if (empty($old_req_id)) {
        echo json_encode(['success' => false, 'message' => 'ID pengajuan awal tidak ditemukan']);
        exit;
    }
 
    $conn->begin_transaction();
    try {
        // Verify old request exists and check status
        $res_old = $conn->query("SELECT * FROM tbl_pengajuan_ticket_hdr WHERE req_id = '" . $conn->real_escape_string($old_req_id) . "'");
        if (!$res_old || $res_old->num_rows == 0) {
            throw new Exception('Pengajuan awal tidak ditemukan');
        }
        
        $old_hdr = $res_old->fetch_assoc();
        $old_status = $old_hdr['status'];
        
        // ── VALIDASI STATUS HARUS 5 
        if ($old_status != '5') {
            throw new Exception('Reschedule hanya dapat dilakukan untuk pengajuan yang sudah di Issued. Status saat ini: ' . $old_status);
        } 
        // Generate new req_id with RSC prefix
        $date   = date('Ymd');
        $prefix = "RSC-$date-";
        $res    = $conn->query("SELECT req_id FROM tbl_pengajuan_ticket_hdr WHERE req_id LIKE '$prefix%' ORDER BY req_id DESC LIMIT 1");
        $seq    = 1;
        if ($res && $res->num_rows > 0) {
            $last = $res->fetch_assoc()['req_id'];
            $seq  = (int) substr($last, -4) + 1;
        }
        $new_req_id = $prefix . str_pad($seq, 4, '0', STR_PAD_LEFT);
        $now = date('Y-m-d H:i:s');
 
        // Sanitize header
        $nik_pemesan     = $conn->real_escape_string($hdr['nik_pemesan']     ?? '');
        $nama_pemesan    = $conn->real_escape_string($hdr['nama_pemesan']    ?? '');
        $posisi_pemesan  = $conn->real_escape_string($hdr['posisi_pemesan']  ?? '');
        $sbu_pemesan     = $conn->real_escape_string(resolveSbuCode($hdr['sbu_pemesan']     ?? ''));
        $no_telp_pemesan = $conn->real_escape_string(normalizeTicketPhoneNumber($hdr['no_telp_pemesan'] ?? ''));
        $email_pemesan   = $conn->real_escape_string($hdr['email_pemesan']   ?? '');
        $atasan_langsung = $conn->real_escape_string($hdr['atasan_langsung'] ?? '');
        $jenis_pengajuan = $conn->real_escape_string($hdr['jenis_pengajuan'] ?? 'Dinas');
        $alasan          = $conn->real_escape_string($hdr['alasan']          ?? '');
        $beban_sbu       = $conn->real_escape_string($hdr['beban_sbu']       ?? '');
 
        // Insert reschedule header
        $sql_hdr = "INSERT INTO tbl_pengajuan_ticket_hdr
            (req_id, nik_pemesan, nama_pemesan, posisi_pemesan, sbu_pemesan, no_telp_pemesan,
            email_pemesan, atasan_langsung, jenis_pengajuan, alasan, beban_sbu,
            status, created_at, create_by)
            VALUES
            ('$new_req_id', '$nik_pemesan', '$nama_pemesan', '$posisi_pemesan', '$sbu_pemesan',
            '$no_telp_pemesan', '$email_pemesan', '$atasan_langsung', '$jenis_pengajuan',
            '$alasan', '$beban_sbu', '1', '$now', '$nik_pemesan')";
 
        if (!$conn->query($sql_hdr)) {
            throw new Exception('Gagal simpan reschedule: ' . $conn->error);
        }
 
        // Update status pengajuan lama menjadi 6 (Reschedule Requested)
        $conn->query("UPDATE tbl_pengajuan_ticket_hdr SET status = '6', ket_admin = CONCAT('Rescheduled ke ', '$new_req_id') WHERE req_id = '" . $conn->real_escape_string($old_req_id) . "'");
 
        // Insert detail penumpang (sama seperti sebelumnya)
        foreach ($penumpang_list as $p) {
            $nik_penumpang     = $conn->real_escape_string($p['nik_penumpang']     ?? '');
            $nik_ktp           = $conn->real_escape_string($p['nik_ktp']           ?? '');
            $nama_penumpang    = $conn->real_escape_string($p['nama_penumpang']    ?? '');
            $posisi_penumpang  = $conn->real_escape_string($p['posisi_penumpang']  ?? '');
            $sbu_penumpang     = $conn->real_escape_string($p['sbu_penumpang']     ?? '');
            $no_telp_penumpang = $conn->real_escape_string($p['no_telp_penumpang'] ?? '');
            $gender            = $conn->real_escape_string($p['gender']            ?? '');
            $tipe_perjalanan   = $conn->real_escape_string($p['tipe_perjalanan']   ?? 'One Way');
            $bandara_asal      = $conn->real_escape_string($p['bandara_asal']      ?? '');
            $bandara_tujuan    = $conn->real_escape_string($p['bandara_tujuan']    ?? '');
            $maskapai          = $conn->real_escape_string($p['maskapai']          ?? '');
            $tgl_penerbangan   = $conn->real_escape_string($p['tanggal_penerbangan'] ?? '');
            $waktu_berangkat   = $conn->real_escape_string($p['waktu_berangkat']   ?? '');
            $waktu_tiba        = $conn->real_escape_string($p['waktu_tiba']        ?? '');
            $catatan           = $conn->real_escape_string($p['catatan_khusus']    ?? '');
 
            $bandara_asal_p    = $conn->real_escape_string($p['bandara_asal_p']    ?? '');
            $bandara_tujuan_p  = $conn->real_escape_string($p['bandara_tujuan_p']  ?? '');
            $maskapai_p        = $conn->real_escape_string($p['maskapai_p']        ?? '');
            $tgl_penerbangan_p = !empty($p['tanggal_penerbangan_p']) ? "'" . $conn->real_escape_string($p['tanggal_penerbangan_p']) . "'" : 'NULL';
            $waktu_berangkat_p = !empty($p['waktu_berangkat_p'])     ? "'" . $conn->real_escape_string($p['waktu_berangkat_p'])     . "'" : 'NULL';
            $waktu_tiba_p      = !empty($p['waktu_tiba_p'])          ? "'" . $conn->real_escape_string($p['waktu_tiba_p'])          . "'" : 'NULL';
            $catatan_p         = $conn->real_escape_string($p['catatan_khusus_p']  ?? '');
 
            $sql_dtl = "INSERT INTO tbl_pengajuan_ticket_dtl
                (req_id, nik_penumpang, nik_ktp, nama_penumpang, posisi_penumpang, sbu_penumpang,
                 no_telp_penumpang, gender, tipe_perjalanan, bandara_asal, bandara_tujuan, maskapai,
                 tanggal_penerbangan, waktu_berangkat, waktu_tiba, catatan_khusus,
                 bandara_asal_p, bandara_tujuan_p, maskapai_p,
                 tanggal_penerbangan_p, waktu_berangkat_p, waktu_tiba_p, catatan_khusus_p)
                VALUES
                ('$new_req_id', '$nik_penumpang', '$nik_ktp', '$nama_penumpang', '$posisi_penumpang',
                 '$sbu_penumpang', '$no_telp_penumpang', '$gender', '$tipe_perjalanan',
                 '$bandara_asal', '$bandara_tujuan', '$maskapai',
                 '$tgl_penerbangan', '$waktu_berangkat', '$waktu_tiba', '$catatan',
                 '$bandara_asal_p', '$bandara_tujuan_p', '$maskapai_p',
                 $tgl_penerbangan_p, $waktu_berangkat_p, $waktu_tiba_p, '$catatan_p')";
 
            if (!$conn->query($sql_dtl)) {
                throw new Exception('Gagal simpan detail penumpang: ' . $conn->error);
            }
        }
 
        $conn->commit();
 
        echo json_encode([
            'success' => true,
            'req_id'  => $new_req_id,
            'message' => 'Pengajuan reschedule berhasil disimpan'
        ]);
 
    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
    exit;
}

if ($action === 'send_reschedule_email') {
    $raw  = file_get_contents('php://input');
    $data = json_decode($raw, true);
 
    $old_req_id = $data['old_req_id'] ?? '';
    $new_req_id = $data['new_req_id'] ?? '';
 
    if (empty($old_req_id) || empty($new_req_id)) {
        echo json_encode(['success' => false, 'message' => 'req_id tidak lengkap']);
        exit;
    }
 
    // ── Fetch header reschedule baru ──────────────────────────────
    $new_esc = $conn->real_escape_string($new_req_id);
    $res_hdr = $conn->query("SELECT * FROM tbl_pengajuan_ticket_hdr WHERE req_id = '$new_esc' LIMIT 1");
    if (!$res_hdr || $res_hdr->num_rows === 0) {
        echo json_encode(['success' => false, 'message' => 'Data reschedule tidak ditemukan']);
        exit;
    }
    $hdr_row = $res_hdr->fetch_assoc();
 
    // ── Fetch penumpang reschedule baru ───────────────────────────
    $res_dtl       = $conn->query("SELECT * FROM tbl_pengajuan_ticket_dtl WHERE req_id = '$new_esc'");
    $penumpang_list = [];
    while ($row_dtl = $res_dtl->fetch_assoc()) {
        $penumpang_list[] = $row_dtl;
    }
 
    $requestor_data = [
        'nama_pemesan'    => $hdr_row['nama_pemesan'],
        'email_pemesan'   => $hdr_row['email_pemesan'],
        'no_telp_pemesan' => $hdr_row['no_telp_pemesan'],
        'beban_sbu'       => $hdr_row['beban_sbu'],
        'nik_pemesan'     => $hdr_row['nik_pemesan'],
        'atasan_langsung' => $hdr_row['atasan_langsung'] ?? '',
        'alasan'          => $hdr_row['alasan'] ?? '',
    ];
 
    sendEmailNotification($new_req_id, $requestor_data, $penumpang_list, 'reschedule', $old_req_id);
 
    echo json_encode(['success' => true]);
    exit;
}

if ($action === 'submit_refund') {
    $raw  = file_get_contents('php://input');
    $data = json_decode($raw, true);

    if (!isset($_SESSION['UserID']) || empty($_SESSION['UserID'])) {
        echo json_encode(['success' => false, 'message' => 'Anda harus login']);
        exit;
    }

    $old_req_id = $conn->real_escape_string($data['old_req_id'] ?? '');
    if (empty($old_req_id)) {
        echo json_encode(['success' => false, 'message' => 'ID pengajuan tidak ditemukan']);
        exit;
    }

    try {
        $res_old = $conn->query("SELECT * FROM tbl_pengajuan_ticket_hdr WHERE req_id = '$old_req_id'");
        if (!$res_old || $res_old->num_rows == 0) throw new Exception('Pengajuan tidak ditemukan');
        $old_hdr = $res_old->fetch_assoc();

        // Validasi hak akses
        if ((string)$_SESSION['UserID'] !== (string)$old_hdr['nik_pemesan'] && !isSuperAdmin($_SESSION['UserID'])) {
            throw new Exception('Anda tidak berhak mengajukan refund untuk tiket ini');
        }

        // Update status jadi 7 + keterangan
        $now = date('Y-m-d H:i:s');
        $ok  = $conn->query("UPDATE tbl_pengajuan_ticket_hdr
                             SET status = '7', ket_admin = 'Tiket direfund'
                             WHERE req_id = '$old_req_id'");
        if (!$ok) throw new Exception('Gagal update status: ' . $conn->error);

        // Kirim email ke requestor
        $email   = $old_hdr['email_pemesan'];
        $nama    = $old_hdr['nama_pemesan'];
        $subject = '[' . APP_NAME . '] Pengajuan Refund Diterima - ' . $old_req_id;
        $body    = "
        <html><head><meta charset='UTF-8'></head>
        <body style='font-family:Arial,sans-serif;color:#1f2937'>
          <div style='max-width:600px;margin:32px auto;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08)'>
            <div style='background:#dc2626;padding:32px;text-align:center'>
              <div style='font-size:36px;margin-bottom:8px'>🔁</div>
              <h1 style='margin:0;color:#fff;font-size:22px'>Pengajuan Refund Diterima</h1>
              <p style='margin:8px 0 0;color:#fecaca;font-size:14px'>Refund Anda sedang diproses oleh admin</p>
            </div>
            <div style='padding:28px 32px'>
              <p>Halo <strong>" . htmlspecialchars($nama) . "</strong>,</p>
              <p style='color:#6b7280;margin-top:8px'>Pengajuan refund untuk tiket <strong>$old_req_id</strong> telah kami terima dan sedang diproses.</p>
              <div style='background:#fef2f2;border:2px dashed #fca5a5;border-radius:12px;padding:18px;text-align:center;margin:24px 0'>
                <div style='font-size:12px;color:#dc2626;font-weight:600;text-transform:uppercase;margin-bottom:6px'>Nomor Tiket</div>
                <div style='font-size:26px;font-weight:700;color:#dc2626'>$old_req_id</div>
                <div style='font-size:12px;color:#9ca3af;margin-top:4px'>Status: Refund</div>
              </div>
              <p style='color:#6b7280;font-size:14px'>Tim admin akan menghubungi Anda untuk proses selanjutnya.</p>
            </div>
            <div style='background:#f9fafb;border-top:1px solid #e5e7eb;padding:16px 32px;text-align:center'>
              <p style='margin:0;font-size:12px;color:#9ca3af'>&copy; " . date('Y') . " " . APP_NAME . "</p>
            </div>
          </div>
        </body></html>";

        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            kirimEmail($email, $nama, $subject, $body);
        }

        // Kirim email ke admin
        $subject_admin = '[' . APP_NAME . '] Pengajuan Refund Baru - ' . $old_req_id;
        $body_admin    = "
        <html><head><meta charset='UTF-8'></head>
        <body style='font-family:Arial,sans-serif;color:#1f2937'>
          <div style='max-width:600px;margin:32px auto;padding:0 16px'>
            <p style='font-size:15px;margin:0 0 16px'>Ada pengajuan refund baru yang masuk:</p>
            <p style='font-size:14px'><strong>No. Tiket:</strong> $old_req_id</p>
            <p style='font-size:14px'><strong>Pemohon:</strong> " . htmlspecialchars($nama) . "</p>
            <p style='font-size:12px;color:#9ca3af;margin-top:32px;border-top:1px solid #e5e7eb;padding-top:16px'>
              &copy; " . date('Y') . " " . APP_NAME . "
            </p>
          </div>
        </body></html>";

        $adminEmails = getAdminEmails();
        if (!empty($adminEmails)) {
            $mainAdmin = array_shift($adminEmails);
            kirimEmail($mainAdmin, 'Admin', $subject_admin, $body_admin, [], $adminEmails);
        }

        echo json_encode(['success' => true, 'req_id' => $old_req_id]);

    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
    exit;
}
