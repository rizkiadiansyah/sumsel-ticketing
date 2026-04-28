<?php
// Reuse the PHPRunner connection when include/dbcommon.php has been loaded.
// This keeps custom endpoints on the same database config as the main app.
if (class_exists('DB')) {
    $runnerConnection = DB::DefaultConnection();
    if ($runnerConnection && $runnerConnection->conn instanceof mysqli) {
        $conn = $runnerConnection->conn;
        $conn->set_charset('utf8mb4');
        return;
    }
}

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sumsel_ticketing');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    http_response_code(500);
    die(json_encode(['success' => false, 'message' => 'Koneksi database gagal: ' . $conn->connect_error]));
}

$conn->set_charset('utf8mb4');
