<?php
require_once '../classes/Database.php';
session_start();

$userId = $_SESSION['user_id'] ?? null;
if (!$userId) {
    die("Nie ste prihlásený.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['knihy']) && !empty($_POST['adresa'])) {
    $knihy = $_POST['knihy'];
    $adresa = trim($_POST['adresa']);

    $db = new Database();
    $pdo = $db->connect();

    $stmt = $pdo->prepare("INSERT INTO objednavky (ID_Pouzivatela, adresa) VALUES (?, ?)");
    $stmt->execute([$userId, $adresa]);
    $objednavkaId = $pdo->lastInsertId();

    $stmtInsert = $pdo->prepare("INSERT INTO objednavka_knihy (objednavka_id, idknihy) VALUES (?, ?)");
    foreach ($knihy as $knihaId) {
        $stmtInsert->execute([$objednavkaId, $knihaId]);
    }

    $stmtDelete = $pdo->prepare("DELETE FROM kosik WHERE ID_Pouzivatela = ?");
    $stmtDelete->execute([$userId]);

    echo "<script>alert('Objednávka bola úspešne odoslaná.'); window.location.href='../index.php';</script>";
} else {
    echo "Chýbajú údaje.";
}
