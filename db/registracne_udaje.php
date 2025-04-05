<?php
$host = "127.0.0.1";
$dbname = "EKniznica";
$port = 3306;
$username = "root";
$password = "";

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

try {
    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname.";port=".$port, $username,
        $password, $options);}
catch (PDOException $e) {
    die("Chyba pripojenia: " . $e->getMessage());}
$meno = $_POST["meno"];
$priezvisko = $_POST["priezvisko"];
$email = $_POST["email"];
$mobil= $_POST["mobil"];
$heslo = $_POST["heslo"];
$sql = "INSERT INTO pouzivatelia (meno, priezvisko, email, mobil, heslo)                
    VALUES ('".$meno."', '".$priezvisko."', '".$email."', '".$mobil."', '".$heslo."')";
$statement = $conn->prepare($sql);

try {
    $insert = $statement->execute();
    header("Location: http://localhost/E-Kniznica/index.php");
    return $insert;
}
catch (\Exception $exception) {
    return false;
}
$conn = null;
