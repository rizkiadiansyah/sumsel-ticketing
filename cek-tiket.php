<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once 'koneksi.php';
require_once __DIR__ . '/include/dbcommon.php';
require_once __DIR__ . '/api-handler.php';


$req_id = $conn->real_escape_string(trim($_GET['req_id'] ?? ''));

if (!$req_id) {
    echo json_encode(['success' => false, 'message' => 'Nomor tiket tidak boleh kosong']);
    exit;
}

$sql_hdr = 
"SELECT 
    h.req_id,
    h.nama_pemesan,
    h.nik_pemesan,
    h.status,
    c.Description AS status_desc,
    h.posisi_pemesan,
    h.sbu_pemesan,
    h.no_telp_pemesan,
    h.email_pemesan,
    h.atasan_langsung,
    h.jenis_pengajuan,
    h.beban_sbu,
    h.created_at,
    h.alasan,
    h.ket_admin,
    ta.attachment
FROM tbl_pengajuan_ticket_hdr h
LEFT JOIN tbl_code_list c 
    ON c.CatID = 'STATUS' 
    AND c.Code = h.status
LEFT JOIN tbl_ticket_attachments ta 
    ON ta.req_id = h.req_id
WHERE h.req_id = '$req_id'";

$res_hdr = $conn->query($sql_hdr);

if (!$res_hdr || $res_hdr->num_rows === 0) {
    echo json_encode(['success' => false, 'message' => 'Nomor tiket tidak ditemukan']);
    exit;
}

$header = $res_hdr->fetch_assoc();
$header['status_code'] = $header['status'];      // nilai asli: "5"
$header['status']      = $header['status_desc']; // deskripsi: "Issued"

$sql_dtl = "SELECT nik_penumpang, nama_penumpang, posisi_penumpang, sbu_penumpang,
                   gender, tipe_perjalanan,
                   bandara_asal, bandara_tujuan, maskapai,
                   tanggal_penerbangan, waktu_berangkat, waktu_tiba,
                   bandara_asal_p, bandara_tujuan_p, maskapai_p,
                   tanggal_penerbangan_p, waktu_berangkat_p, waktu_tiba_p,
                   catatan_khusus
            FROM tbl_pengajuan_ticket_dtl
            WHERE req_id = '$req_id'
            ORDER BY id_detail ASC";

$res_dtl   = $conn->query($sql_dtl);
$penumpang = [];
while ($row = $res_dtl->fetch_assoc()) {
    $penumpang[] = $row;
}

// ✅ Ambil NIK user yang sedang login dari session
$nik_login = $_SESSION['nik'] ?? $_SESSION['username'] ?? ''; // sesuaikan key session-nya

// ✅ Panggil fungsi isSuperAdmin dari api-handler.php
$is_superadmin = !empty($nik_login) && isSuperAdmin($nik_login);


echo json_encode([
    'success'   => true,
    'header'    => $header,
    'penumpang' => $penumpang,
    'is_superadmin' => $is_superadmin
]);
