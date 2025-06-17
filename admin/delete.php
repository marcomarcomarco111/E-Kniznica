<?php
session_start();
require_once '../config.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 1) {
    header("Location: ../index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conn->prepare("DELETE FROM knihy WHERE idknihy = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {

        header("Location: admin.php");
        exit;
    } else {
        echo "Chyba pri mazaní knihy.";
    }
} else {

    header("Location: admin.php");
    exit;
}
?>
