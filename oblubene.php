<?php
require_once 'classes/Database.php';
require_once 'classes/Oblubene.php';

session_start();

$db = new Database();
$pdo = $db->connect();
$oblubene = new Oblubene($pdo);

$userId = $_SESSION['user_id'] ?? null;
if ($userId === null) {
    echo "<script>
        alert('Niesi prihlásený.');
        window.location.href = 'index.php';
    </script>";
    exit;
}

$mojeOblubene = $oblubene->ziskajOblubene($userId);

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Obľúbené</title>
    <link rel="stylesheet" href="css/oblubene.css">
</head>
<body>
<div class="oblubene-page">
    <?php require_once 'parts/header.php';?>
    <?php require_once 'parts/login.php';?>

    <h1>Vaše obľúbené knihy</h1>

    <?php if (empty($mojeOblubene)): ?>
        <p>Nemáte žiadne obľúbené knihy.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($mojeOblubene as $kniha): ?>
                <li>
                    <?= htmlspecialchars($kniha['nazov']) ?> | <?= htmlspecialchars($kniha['autor']) ?>
                    <a href="oblubene/deleteoblubene.php?idknihy=<?= $kniha['idknihy'] ?>">🗑️</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
<?php include_once 'parts/footer.html';?>

</body>
