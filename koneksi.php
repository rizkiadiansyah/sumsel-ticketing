<?php
define('DB_HOST', '45.64.1.195');
define('DB_USER', 'admin_ticketing');
define('DB_PASS', '#Sentosa26');
define('DB_NAME', 'ticketing_sumsel_prod');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    http_response_code(500);
    die(json_encode(['success' => false, 'message' => 'Koneksi database gagal: ' . $conn->connect_error]));
}

$conn->set_charset('utf8mb4');