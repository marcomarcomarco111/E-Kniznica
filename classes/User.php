<?php
require_once 'Database.php';

class User {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function login($email, $heslo) {
        $sql = "SELECT ID_Pouzivatela, Meno, Priezvisko, Heslo, admin FROM pouzivatelia WHERE email = :email LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $heslo === $user['Heslo']) {

            $_SESSION['user_id'] = $user['ID_Pouzivatela'];
            $_SESSION['meno'] = $user['Meno'];
            $_SESSION['priezvisko'] = $user['Priezvisko'];
            $_SESSION['admin'] = $user['admin'];

            return $user['admin'] == 1 ? 'admin' : 'user';
        }

        return false;
    }
    public function register($meno, $priezvisko, $email, $mobil, $heslo) {

        $check = $this->pdo->prepare("SELECT COUNT(*) FROM pouzivatelia WHERE email = :email");
        $check->bindParam(':email', $email);
        $check->execute();

        if ($check->fetchColumn() > 0) {
            return "Email už existuje.";
        }

        $sql = "INSERT INTO pouzivatelia (Meno, Priezvisko, email, mobil, Heslo, admin)
            VALUES (:meno, :priezvisko, :email, :mobil, :heslo, 0)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':meno', $meno);
        $stmt->bindParam(':priezvisko', $priezvisko);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobil', $mobil);
        $stmt->bindParam(':heslo', $heslo);

        if ($stmt->execute()) {
            return true;
        } else {
            return "Chyba pri registrácii.";
        }
    }

}
