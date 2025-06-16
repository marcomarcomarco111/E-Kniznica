<?php
session_start();
require_once __DIR__ . '/../classes/User.php';

$user = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['heslo'])) {
    $email = $_POST['email'];
    $heslo = $_POST['heslo'];

    $loginResult = $user->login($email, $heslo);

    if ($loginResult === 'admin') {
        header("Location: ../admin/adminmenu.php");
        exit();
    } elseif ($loginResult === 'user') {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Nesprávny e-mail alebo heslo.";
    }
} else {
    die('Neplatný prístup.');
}

