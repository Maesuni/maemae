<?php
$host = 'localhost';
$user = 'stephane';
$password = '1234567';
$database = 'mae';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
