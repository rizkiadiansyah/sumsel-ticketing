<?php
require_once("include/dbcommon.php");
$runnerConnection = DB::DefaultConnection();
$conn = $runnerConnection ? $runnerConnection->conn : null;
if (!$conn instanceof mysqli) {
    http_response_code(500); exit('Koneksi database tidak tersedia');
}
$conn->set_charset('utf8mb4');

if (!isset($_SESSION['UserID']) || $_SESSION['UserID'] == '') {
    http_response_code(403); exit('Unauthorized');
}

$req_id = $conn->real_escape_string(trim($_GET['req_id'] ?? ''));
if (!$req_id) { http_response_code(400); exit('Invalid'); }

$res = $conn->query("SELECT ta.attachment, h.status 
                     FROM tbl_ticket_attachments ta
                     JOIN tbl_pengajuan_ticket_hdr h ON h.req_id = ta.req_id
                     WHERE ta.req_id = '$req_id' LIMIT 1");
$row = $res ? $res->fetch_assoc() : null;

if (!$row || $row['status'] != 5 || !$row['attachment']) {
    http_response_code(404); exit('File tidak ditemukan atau tiket belum Issued');
}

$attachments = json_decode($row['attachment'], true);
if (!$attachments || !is_array($attachments)) {
    http_response_code(404); exit('Format attachment tidak valid');
}

// Kalau cuma 1 file, langsung download tanpa ZIP
if (count($attachments) === 1) {
    $first      = $attachments[0];
    $filePath   = __DIR__ . '/' . ltrim($first['name'], '/');
    if (!file_exists($filePath)) {
        http_response_code(404); exit('File tidak ada di server');
    }
    $finfo    = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $filePath);
    finfo_close($finfo);
    header('Content-Type: ' . $mimeType);
    header('Content-Disposition: attachment; filename="' . rawurlencode($first['usrName']) . '"');
    header('Content-Length: ' . filesize($filePath));
    readfile($filePath);
    exit;
}

// Lebih dari 1 file → ZIP
if (!class_exists('ZipArchive')) {
    http_response_code(500); exit('ZipArchive tidak tersedia di server');
}

$zipName = 'tiket_' . $req_id . '_' . date('Ymd') . '.zip';
$tmpZip  = sys_get_temp_dir() . '/' . $zipName;

$zip = new ZipArchive();
if ($zip->open($tmpZip, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
    http_response_code(500); exit('Gagal membuat file ZIP');
}

foreach ($attachments as $att) {
    $filePath = __DIR__ . '/' . ltrim($att['name'], '/');
    if (file_exists($filePath)) {
        $zip->addFile($filePath, $att['usrName']); // nama dalam ZIP = usrName
    }
}
$zip->close();

if (!file_exists($tmpZip)) {
    http_response_code(500); exit('Gagal menghasilkan ZIP');
}

header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . rawurlencode($zipName) . '"');
header('Content-Length: ' . filesize($tmpZip));
readfile($tmpZip);

// Hapus file ZIP sementara setelah dikirim
@unlink($tmpZip);
exit;