<?php
require_once("include/dbcommon.php");
require_once 'koneksi.php';

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

// attachment di DB adalah JSON array, ambil elemen pertama
$attachments = json_decode($row['attachment'], true);
if (!$attachments || !isset($attachments[0]['name'])) {
    http_response_code(404); exit('Format attachment tidak valid');
}

$first       = $attachments[0];
$storedName  = $first['name'];
$displayName = $first['usrName'];

$filePath = __DIR__ . '/' . ltrim($storedName, '/');

if (!file_exists($filePath)) {
    http_response_code(404); exit('File tidak ada di server');
}

// Deteksi MIME type
$finfo    = finfo_open(FILEINFO_MIME_TYPE);
$mimeType = finfo_file($finfo, $filePath);
finfo_close($finfo);

header('Content-Type: ' . $mimeType);
header('Content-Disposition: attachment; filename="' . rawurlencode($displayName) . '"');
header('Content-Length: ' . filesize($filePath));
readfile($filePath);
exit;