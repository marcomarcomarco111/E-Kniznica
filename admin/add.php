<?php
global $conn;
session_start();
require_once '../config.php';
require_once '../classes/Admin.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 1) {
    header("Location: ../index.php");
    exit;
}

$admin = new Admin($conn);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazov = trim($_POST['nazov']);
    $autor = trim($_POST['autor']);
    $jazyk = trim($_POST['jazyk']);
    $strany = intval($_POST['strany']);
    $cena = floatval($_POST['cena']);
    $popis = trim($_POST['popis']);
    $obrazok = trim($_POST['obrazok']);

    $admin = new Admin($conn);
    $result = $admin->addBook($nazov, $autor, $jazyk, $strany, $cena, $popis, $obrazok);

    if ($result) {
        header("Location: adminmenu.php");
        exit;
    } else {
        $errors[] = "Chyba pri uložení knihy do databázy.";
    }
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Pridať knihu | Admin</title>
    <link rel="stylesheet" href="../css/admin.css">

</head>
<body>

<div class="form-container">
    <h1>Pridať novú knihu</h1>

    <?php if (!empty($errors)): ?>
        <div class="errors">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="add.php" method="POST">
        <label for="nazov">Názov knihy</label>
        <input type="text" id="nazov" name="nazov" required>

        <label for="autor">Autor</label>
        <input type="text" id="autor" name="autor" required>

        <label for="jazyk">Jazyk</label>
        <input type="text" id="jazyk" name="jazyk" required>

        <label for="strany">Počet strán</label>
        <input type="number" id="strany" name="strany" min="1" required>

        <label for="cena">Cena (€)</label>
        <input type="number" step="0.01" id="cena" name="cena" min="0" required>

        <label for="popis">Popis</label>
        <textarea id="popis" name="popis"></textarea>

        <label for="obrazok">URL obrázka</label>
        <input type="text" id="obrazok" name="obrazok" placeholder="napr. images/kniha.jpg">

        <button type="submit" class="btn-submit">Pridať knihu</button>
    </form>
</div>

</body>
</html>
