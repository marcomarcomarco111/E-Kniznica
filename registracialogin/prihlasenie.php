<?php
session_start();
require_once __DIR__ . '/../classes/Database.php';

$db = new Database();
$pdo = $db->connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['heslo'])) {
    $email = $_POST['email'];
    $heslo = $_POST['heslo'];

    $sql = "SELECT ID_Pouzivatela, Meno, Priezvisko, Heslo, admin FROM pouzivatelia WHERE email = :email LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
   //$user && password_verify($heslo, $user['Heslo']) - v pripade keby chceme hashovane heslo z databazy pouzit na prihlasenie
    if ($heslo === $user['Heslo']) {
        $_SESSION['user_id'] = $user['ID_Pouzivatela'];
        $_SESSION['meno'] = $user['Meno'];
        $_SESSION['priezvisko'] = $user['Priezvisko'];
        $_SESSION['admin'] = $user['admin'];

        if ($user['admin'] == 1) {

            header("Location: http://localhost/E-Kniznica/admin/admin.php");
            exit();

        } else {
            header("Location: http://localhost/E-Kniznica/index.php");
            exit();


        }
    } else {
        echo "Nesprávny e-mail alebo heslo.";
    }
} else {
    die('Neplatný prístup.');
}
