<?php
require_once __DIR__ . '/../classes/Database.php';

$meno = $_POST['meno'] ?? '';
$priezvisko = $_POST['priezvisko'] ?? '';
$email = $_POST['email'] ?? '';
$mobil = $_POST['mobil'] ?? '';
$heslo = $_POST['heslo'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Zlý e-mail:");
}

//$hashovane_heslo = password_hash($heslo, PASSWORD_DEFAULT); tuto je moznost zahashovania hesla v pripade potreby

$db = new Database();
$conn = $db->connect();

try {
    $sql = "INSERT INTO pouzivatelia (Meno, Priezvisko, email, mobil, Heslo)
            VALUES (:meno, :priezvisko, :email, :mobil, :heslo)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':meno', $meno);
    $stmt->bindParam(':priezvisko', $priezvisko);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mobil', $mobil);
    $stmt->bindParam(':heslo', $heslo);

    $stmt->execute();

    header("Location: ../index.php");
    exit;
} catch (PDOException $e) {
    echo "Chyba pri registrácii: " . $e->getMessage();
}
?>
