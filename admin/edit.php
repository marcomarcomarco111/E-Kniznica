<?php
session_start();
require_once '../config.php';
require_once '../classes/Admin.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 1) {
    header("Location: ../index.php");
    exit;
}

$admin = new Admin($conn);
$id = $_GET['id'] ?? null;

if (!$id || !($kniha = $admin->getBookById((int)$id))) {
    die('Kniha nebola nájdená.');
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim', $_POST);

    if (empty($data['nazov'])) $errors[] = "Názov je povinný.";
    if (empty($data['autor'])) $errors[] = "Autor je povinný.";

    if (!$errors) {
        if ($admin->updateBook(
            (int)$id,
            $data['nazov'],
            $data['autor'],
            $data['jazyk'],
            (int)$data['strany'],
            (float)$data['cena'],
            $data['popis'],
            $data['obrazok']
        )) {
            header("Location: admin.php?msg=Uprava uspesna");
            exit;
        }
        $errors[] = "Chyba pri úprave knihy.";
    }
}
?>

<!DOCTYPE html>
<html lang="sk">
<head><meta charset="UTF-8"><title>Upraviť knihu | Admin</title><link rel="stylesheet" href="../css/admin.css"></head>
<body>
<div class="form-container">
    <h1>Upraviť knihu</h1>

    <?php if ($errors): ?>
        <div class="errors"><ul><?php foreach ($errors as $e) echo "<li>" . htmlspecialchars($e) . "</li>"; ?></ul></div>
    <?php endif; ?>

    <form method="post">
        <?php
        $fields = ['nazov' => 'Názov', 'autor' => 'Autor', 'jazyk' => 'Jazyk', 'strany' => 'Počet strán', 'cena' => 'Cena (€)', 'popis' => 'Popis', 'obrazok' => 'Obrázok (URL)'];
        foreach ($fields as $field => $label) {
            $value = htmlspecialchars($kniha[$field]);
            if ($field === 'popis') {
                echo "<label for='$field'>$label:</label><br><textarea id='$field' name='$field' required>$value</textarea><br>";
            } elseif ($field === 'strany') {
                echo "<label for='$field'>$label:</label><br><input type='number' id='$field' name='$field' value='$value' required><br>";
            } elseif ($field === 'cena') {
                echo "<label for='$field'>$label:</label><br><input type='number' step='0.01' id='$field' name='$field' value='$value' required><br>";
            } else {
                echo "<label for='$field'>$label:</label><br><input type='text' id='$field' name='$field' value='$value' required><br>";
            }
        }
        ?>
        <button type="submit" class="btn-submit">Upraviť knihu</button>

    </form>
</div>
</body>
</html>
