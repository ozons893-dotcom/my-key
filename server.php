<?php
// server.php
$uploadDir = 'dumps/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$filename = $_SERVER['HTTP_X_FILENAME'] ?? 'unknown.enc';
$filepath = $uploadDir . basename($filename);

// Сохраняем тело запроса как есть
file_put_contents($filepath, file_get_contents('php://input'));

echo "OK";
?>