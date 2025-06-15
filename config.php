<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "EKniznica";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
