<?php
require_once 'config.php';
require_once __DIR__ . '/parts/header.php';
require_once __DIR__ . '/parts/login.php';



if (!isset($_GET['id'])) {
    die("Neni id knihy");
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM knihy WHERE idknihy = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    die("Kniha neni");
}

$kniha = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($kniha['nazov']) ?> | E-Knižnica</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/book.css">
</head>
<body>

<div class="book-container">
    <img src="<?= htmlspecialchars($kniha['obrazok']) ?>" alt="Obálka knihy">
    <div class="book-info">
        <h1><?= htmlspecialchars($kniha['nazov']) ?></h1>
        <p><strong>Autor:</strong> <?= htmlspecialchars($kniha['autor']) ?></p>
        <p><strong>Jazyk:</strong> <?= htmlspecialchars($kniha['jazyk']) ?></p>
        <p><strong>Počet strán:</strong> <?= htmlspecialchars($kniha['strany']) ?></p>
        <p><strong>Popis:</strong><br><?= nl2br(htmlspecialchars($kniha['popis'])) ?></p>
        <div class="price"><strong>Cena:</strong> <?= htmlspecialchars($kniha['cena']) ?> €</div>
        <div class="book-buttons">
            <button onclick="alert('Kniha bola pridaná do košíka!');">Pridať do košíku</button>
            <form action="oblubene/addoblubene.php" method="post" style="display:inline;">
                <input type="hidden" name="id" value="<?= $kniha['idknihy'] ?>">
                <button type="submit" onclick="alert('Kniha bola pridaná do obľúbených!');">Pridať do obľúbených</button>
            </form>

        </div>
    </div>
</div>
<br>
<br>
<br>


<script src="js/script.js"></script>
</body>
</html>
