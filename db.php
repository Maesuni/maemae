<?php
$host = 'localhost';
$user = 'stephane';
$password = '12345678';
$database = 'mae';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
