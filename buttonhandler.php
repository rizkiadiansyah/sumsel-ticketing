<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}


if($buttId=='Approved')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Approved($params);
}
if($buttId=='Rejected')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Rejected($params);
}
if($buttId=='export')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_export($params);
}
if($buttId=='Issued')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Issued($params);
}





// create table and non table handlers
function buttonHandler_Approved($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	require_once __DIR__ . '/include/dbcommon.php';

$runnerConnection = DB::DefaultConnection();
$conn = $runnerConnection ? $runnerConnection->conn : null;
if (!$conn instanceof mysqli) {
    $result["success"] = false;
    $result["message"] = 'Koneksi database tidak tersedia';
    return;
}
$conn->set_charset('utf8mb4');

require_once __DIR__ . '/libs/phpmailer/class.phpmailer.php';
require_once __DIR__ . '/libs/phpmailer/class.smtp.php';

// Config SMTP
$globalSettings = array(
    'strSMTPServer'   => 'mail.baramultigroup.co.id',
    'strSMTPPort'     => '465',
    'strSMTPUser'     => 'noreply_ticketsumsel@baramultigroup.co.id',
    'strSMTPPassword' => '#T!cketing4390',
    'strFromEmail'    => 'noreply_ticketsumsel@baramultigroup.co.id',
    'SMTPSecure'      => 'ssl',
);

if (!defined('APP_NAME')) define('APP_NAME', 'Sumsel Ticketing');
if (!defined('APP_URL'))  define('APP_URL',  'http://' . $_SERVER['HTTP_HOST']);

function kirimEmailApprove($to, $to_name, $subject, $body_html) {
    global $globalSettings;

    $mail = new PHPMailer();
    $mail->CharSet   = 'UTF-8';
    $mail->SMTPDebug = 0;

    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = $globalSettings['SMTPSecure'];
    $mail->Host       = $globalSettings['strSMTPServer'];
    $mail->Port       = (int)$globalSettings['strSMTPPort'];
    $mail->Username   = $globalSettings['strSMTPUser'];
    $mail->Password   = $globalSettings['strSMTPPassword'];

    $mail->SetFrom($globalSettings['strFromEmail'], APP_NAME);
    $mail->AddAddress($to, $to_name);
    $mail->Subject = $subject;
    $mail->MsgHTML($body_html);
    $mail->IsHTML(true);

    if (!$mail->Send()) {
        error_log('[Approve] Gagal kirim email ke ' . $to . ': ' . $mail->ErrorInfo);
        return false;
    }
    return true;
}

$processed = 0;
$details   = array();
$has_error = false;
$error_msg = '';
date_default_timezone_set('Asia/Jakarta');

while ($record = $button->getNextSelectedRecord()) {
    $req_id        = $record['req_id'];
    $email_pemesan = $record['email_pemesan'];
    $nama_pemesan  = $record['nama_pemesan'];
    $now           = date('Y-m-d H:i:s');
    $approved_by   = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : 'Admin';
    $cek_link      = 'http://' . $_SERVER['HTTP_HOST'] . '/cek-status.php?req_id=' . urlencode($req_id);
    $status_saat_ini  = $record['status'];

    // Hanya status On Progress (1 dan 3) yang bisa di-hold
    if ($status_saat_ini != '1' && $status_saat_ini != '3') {
        $skipped++;
        $details[] = $req_id . ' (' . $nama_pemesan . ') dilewati — status bukan On Progress atau Hold';
        continue;
    }

    $res = CustomQuery("UPDATE tbl_pengajuan_ticket_hdr 
        SET status = '2', 
            update_by = '$approved_by', 
            updated_at = '$now' 
        WHERE req_id = '$req_id'");

    if (!$res) {
        $has_error = true;
        $error_msg = 'Gagal update status untuk ' . $req_id;
        continue;
    }


    if (!empty($email_pemesan)) {
        $subject = '[Sumsel Ticketing] Pengajuan Tiket Disetujui - ' . $req_id;
        $body = "
        <html><head><meta charset='UTF-8'></head>
        <body style='font-family:Arial,sans-serif;color:#1f2937'>
          <div style='max-width:620px;margin:32px auto;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08)'>
            <div style='background:linear-gradient(135deg,#059669 0%,#10b981 100%);padding:32px;text-align:center'>
              <div style='font-size:36px;margin-bottom:8px'>&#x2705;</div>
              <h1 style='margin:0;color:#fff;font-size:22px;font-weight:700'>Pengajuan Disetujui!</h1>
              <p style='margin:8px 0 0;color:#a7f3d0;font-size:14px'>Tiket Anda telah disetujui</p>
            </div>
            <div style='padding:28px 32px'>
              <p style='font-size:15px;margin:0 0 16px'>Halo <strong>" . htmlspecialchars($nama_pemesan) . "</strong>,</p>
              <p style='font-size:14px;color:#6b7280;margin:0 0 24px'>Pengajuan tiket Anda telah <strong style='color:#059669'>disetujui</strong> oleh admin.</p>
              <div style='background:#ecfdf5;border:2px dashed #6ee7b7;border-radius:12px;padding:18px;text-align:center;margin-bottom:24px'>
                <div style='font-size:12px;color:#059669;font-weight:600;letter-spacing:.1em;text-transform:uppercase;margin-bottom:6px'>Nomor Tiket</div>
                <div style='font-size:26px;font-weight:700;color:#059669'>$req_id</div>
              </div>
              <table style='width:100%;border-collapse:collapse;background:#f9fafb;border-radius:10px;overflow:hidden'>
                <tr style='border-bottom:1px solid #e5e7eb'>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280;width:140px'>Status</td>
                  <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#059669'>Approved</td>
                </tr>
                <tr style='border-bottom:1px solid #e5e7eb'>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280'>Disetujui Oleh</td>
                  <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#1f2937'>" . htmlspecialchars($approved_by) . "</td>
                </tr>
                <tr>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280'>Tanggal</td>
                  <td style='padding:10px 14px;font-size:13px;color:#1f2937'>" . date('d M Y H:i') . "</td>
                </tr>
              </table>
              <div style='background:#f0fdf4;border:1.5px solid #86efac;border-radius:12px;padding:20px;text-align:center;margin-top:24px'>
                <div style='font-size:14px;font-weight:600;color:#166534;margin-bottom:12px'>Pantau Status Pengajuan Anda</div>
                <a href='$cek_link' style='display:inline-block;background:#059669;color:#ffffff;text-decoration:none;padding:12px 28px;border-radius:8px;font-size:14px;font-weight:700'>&#x1F50D; Cek Status Tiket</a>
                <div style='font-size:12px;color:#6b7280;margin-top:10px'>atau buka: <a href='$cek_link' style='color:#4338ca;word-break:break-all'>$cek_link</a></div>
              </div>
            </div>
            <div style='background:#f9fafb;border-top:1px solid #e5e7eb;padding:20px 32px;text-align:center'>
              <p style='margin:0;font-size:12px;color:#9ca3af'>Email ini adalah notifikasi otomatis. Jangan balas email ini.</p>
              <p style='margin:4px 0 0;font-size:12px;color:#9ca3af'>&copy; " . date('Y') . " Sumsel Ticketing</p>
            </div>
          </div>
        </body></html>";

        kirimEmailApprove($email_pemesan, $nama_pemesan, $subject, $body);
    }

    $details[]  = $req_id . ' (' . $nama_pemesan . ') berhasil di-approve';
    $processed++;
}

if ($processed > 0) {
    $result["success"] = true;
    $result["message"] = $processed . ' pengajuan berhasil di-approve.';
} else {
    $result["success"] = false;
    $result["message"] = $has_error ? $error_msg : 'Tidak ada pengajuan yang diproses.';
}
$result["details"] = $details;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Rejected($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	require_once __DIR__ . '/include/dbcommon.php';

$runnerConnection = DB::DefaultConnection();
$conn = $runnerConnection ? $runnerConnection->conn : null;
if (!$conn instanceof mysqli) {
    $result["success"] = false;
    $result["message"] = 'Koneksi database tidak tersedia';
    return;
}
$conn->set_charset('utf8mb4');

require_once __DIR__ . '/libs/phpmailer/class.phpmailer.php';
require_once __DIR__ . '/libs/phpmailer/class.smtp.php';


// Config SMTP
$globalSettings = array(
    'strSMTPServer'   => 'mail.baramultigroup.co.id',
    'strSMTPPort'     => '465',
    'strSMTPUser'     => 'noreply_ticketsumsel@baramultigroup.co.id',
    'strSMTPPassword' => '#T!cketing4390',
    'strFromEmail'    => 'noreply_ticketsumsel@baramultigroup.co.id',
    'SMTPSecure'      => 'ssl',
);

if (!defined('APP_NAME')) define('APP_NAME', 'Sumsel Ticketing');
if (!defined('APP_URL'))  define('APP_URL',  'http://' . $_SERVER['HTTP_HOST']);

function kirimEmailReject($to, $to_name, $subject, $body_html) {
    global $globalSettings;

    $mail = new PHPMailer();
    $mail->CharSet   = 'UTF-8';
    $mail->SMTPDebug = 0;

    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = $globalSettings['SMTPSecure'];
    $mail->Host       = $globalSettings['strSMTPServer'];
    $mail->Port       = (int)$globalSettings['strSMTPPort'];
    $mail->Username   = $globalSettings['strSMTPUser'];
    $mail->Password   = $globalSettings['strSMTPPassword'];

    $mail->SetFrom($globalSettings['strFromEmail'], APP_NAME);
    $mail->AddAddress($to, $to_name);
    $mail->Subject = $subject;
    $mail->MsgHTML($body_html);
    $mail->IsHTML(true);

    if (!$mail->Send()) {
        error_log('[Reject] Gagal kirim email ke ' . $to . ': ' . $mail->ErrorInfo);
        return false;
    }
    return true;
}

while ($record = $button->getNextSelectedRecord()) {
    $req_id           = $record['req_id'];
    $email_pemesan    = $record['email_pemesan'];
    $nama_pemesan     = $record['nama_pemesan'];
    $keterangan_admin = $record['ket_admin'];
    $now              = date('Y-m-d H:i:s');
    $rejected_by      = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : 'Admin';
    $cek_link         = 'http://' . $_SERVER['HTTP_HOST'] . '/cek-status.php?req_id=' . urlencode($req_id);
    $status_saat_ini  = $record['status'];

    // Hanya status On Progress (1) yang bisa di-hold
    if ($status_saat_ini != '1') {
        $skipped++;
        $details[] = $req_id . ' (' . $nama_pemesan . ') dilewati — status bukan On Progress';
        continue;
    }

    // Validasi ket_admin wajib diisi
    if (empty($keterangan_admin)) {
        $has_error = true;
        $error_msg = 'Harap isi Keterangan Admin pada pengajuan ' . $req_id . ' sebelum melakukan reject.';
        continue;
    }


    $res = CustomQuery("UPDATE tbl_pengajuan_ticket_hdr 
        SET status = '4', 
            update_by = '$rejected_by', 
            updated_at = '$now' 
        WHERE req_id = '$req_id'");

    if (!$res) {
        $has_error = true;
        $error_msg = 'Gagal update status untuk ' . $req_id;
        continue;
    }

    if (!empty($email_pemesan)) {
        $subject = '[Sumsel Ticketing] Pengajuan Tiket Ditolak - ' . $req_id;
        $body = "
        <html><head><meta charset='UTF-8'></head>
        <body style='font-family:Arial,sans-serif;color:#1f2937'>
          <div style='max-width:620px;margin:32px auto;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08)'>
            <div style='background:linear-gradient(135deg,#dc2626 0%,#ef4444 100%);padding:32px;text-align:center'>
              <div style='font-size:36px;margin-bottom:8px'>&#x274C;</div>
              <h1 style='margin:0;color:#fff;font-size:22px;font-weight:700'>Pengajuan Ditolak</h1>
              <p style='margin:8px 0 0;color:#fecaca;font-size:14px'>Tiket Anda tidak dapat diproses</p>
            </div>
            <div style='padding:28px 32px'>
              <p style='font-size:15px;margin:0 0 16px'>Halo <strong>" . htmlspecialchars($nama_pemesan) . "</strong>,</p>
              <p style='font-size:14px;color:#6b7280;margin:0 0 24px'>Mohon maaf, pengajuan tiket Anda <strong style='color:#dc2626'>ditolak</strong> oleh admin.</p>
              <div style='background:#fef2f2;border:2px dashed #fca5a5;border-radius:12px;padding:18px;text-align:center;margin-bottom:24px'>
                <div style='font-size:12px;color:#dc2626;font-weight:600;letter-spacing:.1em;text-transform:uppercase;margin-bottom:6px'>Nomor Tiket</div>
                <div style='font-size:26px;font-weight:700;color:#dc2626'>$req_id</div>
              </div>
              <table style='width:100%;border-collapse:collapse;background:#f9fafb;border-radius:10px;overflow:hidden'>
                <tr style='border-bottom:1px solid #e5e7eb'>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280;width:140px'>Status</td>
                  <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#dc2626'>Rejected</td>
                </tr>
                <tr style='border-bottom:1px solid #e5e7eb'>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280'>Ditolak Oleh</td>
                  <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#1f2937'>" . htmlspecialchars($rejected_by) . "</td>
                </tr>
                <tr style='border-bottom:1px solid #e5e7eb'>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280'>Tanggal</td>
                  <td style='padding:10px 14px;font-size:13px;color:#1f2937'>" . date('d M Y H:i') . "</td>
                </tr>
                <tr>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280;vertical-align:top'>Alasan Penolakan</td>
                  <td style='padding:10px 14px;font-size:13px;color:#dc2626;font-weight:600'>" . htmlspecialchars($keterangan_admin) . "</td>
                </tr>
              </table>
              <div style='background:#fff7ed;border:1.5px solid #fdba74;border-radius:12px;padding:16px;margin-top:24px'>
                <div style='font-size:13px;color:#92400e;font-weight:600;margin-bottom:6px'>&#x2139;&#xFE0F; Informasi</div>
                <div style='font-size:13px;color:#78350f'>Jika Anda memiliki pertanyaan terkait penolakan ini, silakan hubungi admin atau ajukan tiket baru dengan melengkapi persyaratan yang diperlukan.</div>
              </div>
              <div style='background:#fef2f2;border:1.5px solid #fca5a5;border-radius:12px;padding:20px;text-align:center;margin-top:24px'>
                <div style='font-size:14px;font-weight:600;color:#7f1d1d;margin-bottom:12px'>Pantau Status Pengajuan Anda</div>
                <a href='$cek_link' style='display:inline-block;background:#dc2626;color:#ffffff;text-decoration:none;padding:12px 28px;border-radius:8px;font-size:14px;font-weight:700'>&#x1F50D; Cek Status Tiket</a>
                <div style='font-size:12px;color:#6b7280;margin-top:10px'>atau buka: <a href='$cek_link' style='color:#dc2626;word-break:break-all'>$cek_link</a></div>
              </div>
            </div>
            <div style='background:#f9fafb;border-top:1px solid #e5e7eb;padding:20px 32px;text-align:center'>
              <p style='margin:0;font-size:12px;color:#9ca3af'>Email ini adalah notifikasi otomatis. Jangan balas email ini.</p>
              <p style='margin:4px 0 0;font-size:12px;color:#9ca3af'>&copy; " . date('Y') . " Sumsel Ticketing</p>
            </div>
          </div>
        </body></html>";

        kirimEmailReject($email_pemesan, $nama_pemesan, $subject, $body);
    }

    $details[]  = $req_id . ' (' . $nama_pemesan . ') berhasil di-reject';
    $processed++;
}

if ($processed > 0) {
    $result["success"] = true;
    $result["message"] = $processed . ' pengajuan berhasil di-reject.';
} else {
    $result["success"] = false;
    $result["message"] = $has_error ? $error_msg : 'Tidak ada pengajuan yang diproses.';
}
$result["details"] = $details;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_export($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Issued($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	require_once __DIR__ . '/include/dbcommon.php';

$runnerConnection = DB::DefaultConnection();
$conn = $runnerConnection ? $runnerConnection->conn : null;
if (!$conn instanceof mysqli) {
    $result["success"] = false;
    $result["message"] = 'Koneksi database tidak tersedia';
    return;
}
$conn->set_charset('utf8mb4');

require_once __DIR__ . '/libs/phpmailer/class.phpmailer.php';
require_once __DIR__ . '/libs/phpmailer/class.smtp.php';

$globalSettings = array(
    'strSMTPServer'   => 'mail.baramultigroup.co.id',
    'strSMTPPort'     => '465',
    'strSMTPUser'     => 'noreply_ticketsumsel@baramultigroup.co.id',
    'strSMTPPassword' => '#T!cketing4390',
    'strFromEmail'    => 'noreply_ticketsumsel@baramultigroup.co.id',
    'SMTPSecure'      => 'ssl',
);

if (!defined('APP_NAME')) define('APP_NAME', 'Sumsel Ticketing');
if (!defined('APP_URL'))  define('APP_URL',  'http://' . $_SERVER['HTTP_HOST']);

function kirimEmailHold($to, $to_name, $subject, $body_html) {
    global $globalSettings;

    $mail = new PHPMailer();
    $mail->CharSet   = 'UTF-8';
    $mail->SMTPDebug = 0;

    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = $globalSettings['SMTPSecure'];
    $mail->Host       = $globalSettings['strSMTPServer'];
    $mail->Port       = (int)$globalSettings['strSMTPPort'];
    $mail->Username   = $globalSettings['strSMTPUser'];
    $mail->Password   = $globalSettings['strSMTPPassword'];

    $mail->SetFrom($globalSettings['strFromEmail'], APP_NAME);
    $mail->AddAddress($to, $to_name);
    $mail->Subject = $subject;
    $mail->MsgHTML($body_html);
    $mail->IsHTML(true);

    if (!$mail->Send()) {
        error_log('[Hold] Gagal kirim email ke ' . $to . ': ' . $mail->ErrorInfo);
        return false;
    }
    return true;
}

$processed = 0;
$details   = array();
$has_error = false;
$error_msg = '';
$skipped   = 0;
date_default_timezone_set('Asia/Jakarta');

while ($record = $button->getNextSelectedRecord()) {
    $req_id        = $record['req_id'];
    $email_pemesan = $record['email_pemesan'];
    $nama_pemesan  = $record['nama_pemesan'];
    $status_saat_ini = $record['status'];


    // Hanya status On Progress (1) yang bisa di-hold
    if ($status_saat_ini != '1') {
        $skipped++;
        $details[] = $req_id . ' (' . $nama_pemesan . ') dilewati — status bukan On Progress';
        continue;
    }

    $keterangan_admin = $record['ket_admin'] ?? ''; // tidak wajib
    $now       = date('Y-m-d H:i:s');
    $held_by   = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : 'Admin';
    $cek_link  = 'http://' . $_SERVER['HTTP_HOST'] . '/cek-status.php?req_id=' . urlencode($req_id);

    $res = CustomQuery("UPDATE tbl_pengajuan_ticket_hdr 
        SET status = '3', 
            update_by = '$held_by', 
            updated_at = '$now' 
        WHERE req_id = '$req_id'");

    if (!$res) {
        $has_error = true;
        $error_msg = 'Gagal update status untuk ' . $req_id;
        continue;
    }

    if (!empty($email_pemesan)) {
        $subject = '[Sumsel Ticketing] Pengajuan Tiket Di-Hold - ' . $req_id;
        $body = "
        <html><head><meta charset='UTF-8'></head>
        <body style='font-family:Arial,sans-serif;color:#1f2937'>
          <div style='max-width:620px;margin:32px auto;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08)'>
            <div style='background:linear-gradient(135deg,#d97706 0%,#f59e0b 100%);padding:32px;text-align:center'>
              <div style='font-size:36px;margin-bottom:8px'>⏸️</div>
              <h1 style='margin:0;color:#fff;font-size:22px;font-weight:700'>Pengajuan Di-Hold</h1>
              <p style='margin:8px 0 0;color:#fde68a;font-size:14px'>Tiket Anda sedang ditahan sementara</p>
            </div>
            <div style='padding:28px 32px'>
              <p style='font-size:15px;margin:0 0 16px'>Halo <strong>" . htmlspecialchars($nama_pemesan) . "</strong>,</p>
              <p style='font-size:14px;color:#6b7280;margin:0 0 24px'>Pengajuan tiket Anda sedang <strong style='color:#d97706'>di-hold</strong> oleh admin. Mohon menunggu informasi lebih lanjut.</p>
              <div style='background:#fffbeb;border:2px dashed #fcd34d;border-radius:12px;padding:18px;text-align:center;margin-bottom:24px'>
                <div style='font-size:12px;color:#d97706;font-weight:600;letter-spacing:.1em;text-transform:uppercase;margin-bottom:6px'>Nomor Tiket</div>
                <div style='font-size:26px;font-weight:700;color:#d97706'>$req_id</div>
              </div>
              <table style='width:100%;border-collapse:collapse;background:#f9fafb;border-radius:10px;overflow:hidden'>
                <tr style='border-bottom:1px solid #e5e7eb'>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280;width:140px'>Status</td>
                  <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#d97706'>Hold</td>
                </tr>
                <tr style='border-bottom:1px solid #e5e7eb'>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280'>Di-Hold Oleh</td>
                  <td style='padding:10px 14px;font-size:13px;font-weight:600;color:#1f2937'>" . htmlspecialchars($held_by) . "</td>
                </tr>
								" . (!empty($keterangan_admin) ? "
								<tr style='border-bottom:1px solid #e5e7eb'>
								  <td style='padding:10px 14px;font-size:13px;color:#6b7280'>Keterangan</td>
								  <td style='padding:10px 14px;font-size:13px;color:#1f2937'>" . htmlspecialchars($keterangan_admin) . "</td>
								</tr>
								" : "") . "
                <tr>
                  <td style='padding:10px 14px;font-size:13px;color:#6b7280'>Tanggal</td>
                  <td style='padding:10px 14px;font-size:13px;color:#1f2937'>" . date('d M Y H:i') . "</td>
                </tr>
              </table>
              <div style='background:#fffbeb;border:1.5px solid #fcd34d;border-radius:12px;padding:20px;text-align:center;margin-top:24px'>
                <div style='font-size:14px;font-weight:600;color:#92400e;margin-bottom:12px'>Pantau Status Pengajuan Anda</div>
                <a href='$cek_link' style='display:inline-block;background:#d97706;color:#ffffff;text-decoration:none;padding:12px 28px;border-radius:8px;font-size:14px;font-weight:700'>&#x1F50D; Cek Status Tiket</a>
                <div style='font-size:12px;color:#6b7280;margin-top:10px'>atau buka: <a href='$cek_link' style='color:#4338ca;word-break:break-all'>$cek_link</a></div>
              </div>
            </div>
            <div style='background:#f9fafb;border-top:1px solid #e5e7eb;padding:20px 32px;text-align:center'>
              <p style='margin:0;font-size:12px;color:#9ca3af'>Email ini adalah notifikasi otomatis. Jangan balas email ini.</p>
              <p style='margin:4px 0 0;font-size:12px;color:#9ca3af'>&copy; " . date('Y') . " Sumsel Ticketing</p>
            </div>
          </div>
        </body></html>";

        kirimEmailHold($email_pemesan, $nama_pemesan, $subject, $body);
    }

    $details[]  = $req_id . ' (' . $nama_pemesan . ') berhasil di-hold';
    $processed++;
}

if ($processed > 0) {
    $result["success"] = true;
    $result["message"] = $processed . ' pengajuan berhasil di-hold.' . ($skipped > 0 ? " $skipped dilewati karena bukan status On Progress." : '');
} else {
    $result["success"] = false;
    $result["message"] = $has_error ? $error_msg : ($skipped > 0 ? "Semua tiket yang dipilih bukan status On Progress." : 'Tidak ada pengajuan yang diproses.');
}
$result["details"] = $details;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
?>