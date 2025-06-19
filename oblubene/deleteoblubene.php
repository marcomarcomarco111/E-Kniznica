<?php
session_start();
require_once '../classes/Database.php';
require_once '../classes/Oblubene.php';

if (!isset($_SESSION['user_id'])) {
    die("Nie ste prihlásený.");
}

if (!isset($_GET['idknihy'])) {
    die("Chýba id knihy.");
}

$knihaId = intval($_GET['idknihy']);
$userId = $_SESSION['user_id'];

$db = new Database();
$pdo = $db->connect();

$oblubene = new Oblubene($pdo);
$oblubene->odstran($userId, $knihaId);

header("Location: ../oblubene.php");
exit;
?>
