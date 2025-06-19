<?php
require_once '../classes/Database.php';
require_once '../classes/Kosik.php';
session_start();

$userId = $_SESSION['user_id'] ?? null;
if (!$userId || !isset($_GET['idknihy'])) {
    die("Chyba.");
}

$knihaId = intval($_GET['idknihy']);
$db = new Database();
$kosik = new Kosik($db->connect());
$kosik->odstran($userId, $knihaId);

header("Location: ../kosik.php");
exit;
