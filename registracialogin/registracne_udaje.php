<?php
session_start();
require_once __DIR__ . '/../classes/User.php';

$user = new User();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $meno = $_POST["meno"] ?? '';
    $priezvisko = $_POST["priezvisko"] ?? '';
    $email = $_POST["email"] ?? '';
    $mobil = $_POST["mobil"] ?? '';
    $heslo = $_POST["heslo"] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Zlý e-mail.");
    }

    $vysledok = $user->register($meno, $priezvisko, $email, $mobil, $heslo);

    if ($vysledok === true) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Chyba: " . $vysledok;
    }
} else {
    die("Neplatný prístup.");
}

