<?php
require_once 'classes/Database.php';
require_once 'classes/Kosik.php';
session_start();

$userId = $_SESSION['user_id'] ?? null;
if (!$userId) {
    if (!$userId) {
        echo "<script>
        alert('Niesi prihlásený.');
        window.location.href = 'index.php';
    </script>";
        exit;
    }

}

$db = new Database();
$pdo = $db->connect();
$kosik = new Kosik($pdo);

$knihy = $kosik->ziskajKosik($userId);
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Košík</title>
    <link rel="stylesheet" href="css/kosik.css">
</head>
<body>
<div class="kosik-page">
<?php require_once 'parts/header.php';?>
<?php require_once 'parts/login.php';?>

    <h1>Váš košík</h1>
<?php if (empty($knihy)): ?>
    <p>Košík je prázdny.</p>
<?php else: ?>
    <form method="post" action="kosik/objednavka.php" class="kosik-form-box">
        <ul>
            <?php foreach ($knihy as $kniha): ?>
                <li>
                    <?= htmlspecialchars($kniha['nazov']) ?> | <?= htmlspecialchars($kniha['autor']) ?>
                    <a href="kosik/deletekosik.php?idknihy=<?= $kniha['idknihy'] ?>">🗑️</a>
                    <input type="hidden" name="knihy[]" value="<?= $kniha['idknihy'] ?>">
                </li>
            <?php endforeach; ?>
        </ul>
        <label for="adresa">Adresa doručenia:</label><br>
        <textarea name="adresa" id="adresa" rows="4" placeholder="Zadajte vašu adresu..." required></textarea><br><br>

        <button type="submit">Odoslať objednávku</button>
    </form>
<?php endif; ?>


</div>

<?php include_once 'parts/footer.html';?>
</body>
</html>
