<?php
session_start();
require_once '../classes/Database.php';
require_once '../classes/Oblubene.php';

if (!isset($_SESSION['user_id'])) {
    die("Nie ste prihlásený.");
}

if (!isset($_POST['id'])) {
    die("Chýba id knihy.");
}

$knihaId = intval($_POST['id']);
$userId = $_SESSION['user_id'];

$db = new Database();
$pdo = $db->connect();

$oblubene = new Oblubene($pdo);
$oblubene->pridaj($userId, $knihaId);

header("Location: ../book.php?id=" . $knihaId);
exit;
?>
