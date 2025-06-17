<?php
require_once '../classes/Database.php';
require_once '../classes/Oblubene.php';

session_start();

$db = new Database();
$pdo = $db->connect();
$oblubene = new Oblubene($pdo);

$userId = $_SESSION['user_id'] ?? null;
if ($userId === null) {
    die("Nie ste prihlásený.");
}

$mojeOblubene = $oblubene->ziskajOblubene($userId);

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Obľúbené knihy</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>Vaše obľúbené knihy</h1>

<?php if (empty($mojeOblubene)): ?>
    <p>Nemáte žiadne obľúbené knihy.</p>
<?php else: ?>
    <ul>
        <?php foreach ($mojeOblubene as $kniha): ?>
            <li>
                <?= htmlspecialchars($kniha['nazov']) ?> | <?= htmlspecialchars($kniha['autor']) ?>
                <a href="deleteoblubene.php?idknihy=<?= $kniha['idknihy'] ?>">🗑️</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>
