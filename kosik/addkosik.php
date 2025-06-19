<?php
require_once '../classes/Database.php';
require_once '../classes/Kosik.php';
session_start();
$userId = $_SESSION['user_id'] ?? null;
$knihaId = $_POST['id'] ?? null;

if (!$userId || !$knihaId) {
    echo "<script>
        alert('Niesi prihlásený.');
        window.location.href = '../index.php';
    </script>";
    exit;
}

$db = new Database();
$pdo = $db->connect();
$kosik = new Kosik($pdo);

$kosik->pridaj($userId, $knihaId);
if (!empty($_SERVER['HTTP_REFERER'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    header("Location: ../index.php");
}
exit;
exit;
