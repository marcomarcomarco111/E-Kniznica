<?php
session_start();
require_once '../config.php';
require_once '../classes/Admin.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 1) {
    header("Location: ../index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $admin = new Admin($conn);
    if ($admin->deleteBook($id)) {
        header("Location: adminmenu.php");
        exit;
    } else {
        echo "Chyba pri mazaní knihy.";
    }
} else {
    header("Location: admin.php");
    exit;
}

?>
