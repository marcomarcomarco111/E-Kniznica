<?php
session_start();
require_once '../config.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 1) {
    header("Location: ../index.php");
    exit;
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazov = trim($_POST['nazov']);
    $autor = trim($_POST['autor']);
    $jazyk = trim($_POST['jazyk']);
    $strany = intval($_POST['strany']);
    $cena = floatval($_POST['cena']);
    $popis = trim($_POST['popis']);
    $obrazok = trim($_POST['obrazok']);

    if (empty($nazov)) $errors[] = "Názov je povinný.";
    if (empty($autor)) $errors[] = "Autor je povinný.";


    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO knihy (nazov, autor, jazyk, strany, cena, popis, obrazok) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssidsi", $nazov, $autor, $jazyk, $strany, $cena, $popis, $obrazok);

        if ($stmt->execute()) {
            header("Location: admin.php");
            exit;
        } else {
            $errors[] = "Chyba pri uložení knihy do databázy.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Pridať knihu | Admin</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: 3rem auto;
            background: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 0.6rem;
            margin-top: 0.5rem;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }
        textarea {
            resize: vertical;
            height: 120px;
        }
        .btn-submit {
            margin-top: 2rem;
            background-color: #28a745;
            color: white;
            padding: 0.8rem 1.6rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: bold;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
        .errors {
            background: #f8d7da;
            color: #842029;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 8px;
        }
    </style>
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

        <label for="obrazok">URL obrázka (relatívna alebo absolútna cesta)</label>
        <input type="text" id="obrazok" name="obrazok" placeholder="napr. images/kniha.jpg">

        <button type="submit" class="btn-submit">Pridať knihu</button>
    </form>
</div>

</body>
</html>
