<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $customValue = $_POST["value"];
    $file = 'data.txt';
    file_put_contents($file, $customValue . PHP_EOL, FILE_APPEND | LOCK_EX);
    echo json_encode(['message' => 'Data received successfully']);
} else {
    http_response_code(405); 
    echo json_encode(['error' => 'Method not allowed']);
}
?>