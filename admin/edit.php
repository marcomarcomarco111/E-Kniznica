<?php
require_once '../config.php';
session_start();



if (!isset($_GET['id'])) {
    die('Nebolo zadané ID knihy.');
}

$id = intval($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazov = $conn->real_escape_string($_POST['nazov']);
    $autor = $conn->real_escape_string($_POST['autor']);
    $jazyk = $conn->real_escape_string($_POST['jazyk']);
    $strany = intval($_POST['strany']);
    $popis = $conn->real_escape_string($_POST['popis']);
    $cena = floatval($_POST['cena']);
    $obrazok = $conn->real_escape_string($_POST['obrazok']);

    $sql = "UPDATE knihy SET 
                nazov='$nazov', 
                autor='$autor', 
                jazyk='$jazyk', 
                strany=$strany, 
                popis='$popis', 
                cena=$cena, 
                obrazok='$obrazok' 
            WHERE idknihy=$id";

    if ($conn->query($sql)) {
        header('Location: admin.php?msg=Uprava uspesna');
        exit;
    } else {
        echo "Chyba pri uprave: " . $conn->error;
    }
}

$sql = "SELECT * FROM knihy WHERE idknihy = $id";
$result = $conn->query($sql);
if (!$result || $result->num_rows === 0) {
    die('Kniha nebola nájdená.');
}
$kniha = $result->fetch_assoc();
?>

<form method="post">
    <label>Názov:</label><br>
    <input type="text" name="nazov" value="<?= htmlspecialchars($kniha['nazov']) ?>" required><br>

    <label>Autor:</label><br>
    <input type="text" name="autor" value="<?= htmlspecialchars($kniha['autor']) ?>" required><br>

    <label>Jazyk:</label><br>
    <input type="text" name="jazyk" value="<?= htmlspecialchars($kniha['jazyk']) ?>" required><br>

    <label>Počet strán:</label><br>
    <input type="number" name="strany" value="<?= htmlspecialchars($kniha['strany']) ?>" required><br>

    <label>Popis:</label><br>
    <textarea name="popis" required><?= htmlspecialchars($kniha['popis']) ?></textarea><br>

    <label>Cena (€):</label><br>
    <input type="number" step="0.01" name="cena" value="<?= htmlspecialchars($kniha['cena']) ?>" required><br>

    <label>Obrázok (URL):</label><br>
    <input type="text" name="obrazok" value="<?= htmlspecialchars($kniha['obrazok']) ?>" required><br>

    <button type="submit">Upraviť knihu</button>
</form>
