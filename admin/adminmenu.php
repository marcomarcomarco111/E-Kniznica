<?php
session_start();
require_once '../config.php';
require_once '../classes/Admin.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 1) {
    header("Location: ../index.php");
    exit;
}

$admin = new Admin($conn);
$knihy = $admin->getAllBooks();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Admin | Správa kníh</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<a href="../registracialogin/logout.php" style="font-size: 0.9em; margin-left: 650px;">
    <i class="fas fa-sign-out-alt"></i> Odhlásiť sa
</a>

<div class="admin-container">
    <h1>Správa kníh</h1>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Názov</th>
            <th>Autor</th>
            <th>Jazyk</th>
            <th>Strany</th>
            <th>Cena</th>
            <th>Akcie</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($knihy as $kniha): ?>
            <tr>
                <td><?= $kniha['idknihy'] ?></td>
                <td><?= htmlspecialchars($kniha['nazov']) ?></td>
                <td><?= htmlspecialchars($kniha['autor']) ?></td>
                <td><?= htmlspecialchars($kniha['jazyk']) ?></td>
                <td><?= $kniha['strany'] ?></td>
                <td><?= $kniha['cena'] ?> €</td>
                <td class="actions">
                    <a href="edit.php?id=<?= $kniha['idknihy'] ?>">Upraviť</a>
                    <a href="delete.php?id=<?= $kniha['idknihy'] ?>" class="delete" onclick="return confirm('Naozaj chceš vymazať knihu?');">Zmazať</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div style="text-align: center; margin-top: 2rem;">
        <a href="add.php" class="add-book-button">+ Pridať novú knihu</a>
    </div>
</div>

</body>
</html>
