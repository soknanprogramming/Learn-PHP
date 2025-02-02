<?php
$conn = new mysqli("127.0.0.1", "root", "", "coffeedb");

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}
?>