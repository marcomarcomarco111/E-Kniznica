<?php
require_once '../config.php';

class Admin
{
    private $conn;

    public function __construct($dbConnection)
    {
        $this->conn = $dbConnection;
    }

    public function getAllBooks()
    {
        $sql = "SELECT * FROM knihy";
        return $this->conn->query($sql);
    }

    public function getBookById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM knihy WHERE idknihy = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function addBook($nazov, $autor, $jazyk, $strany, $cena, $popis, $obrazok)
    {
        $stmt = $this->conn->prepare("INSERT INTO knihy (nazov, autor, jazyk, strany, cena, popis, obrazok) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssidss", $nazov, $autor, $jazyk, $strany, $cena, $popis, $obrazok);
        return $stmt->execute();
    }

    public function updateBook($id, $nazov, $autor, $jazyk, $strany, $cena, $popis, $obrazok)
    {
        $stmt = $this->conn->prepare("UPDATE knihy SET nazov=?, autor=?, jazyk=?, strany=?, cena=?, popis=?, obrazok=? WHERE idknihy=?");
        $stmt->bind_param("sssidssi", $nazov, $autor, $jazyk, $strany, $cena, $popis, $obrazok, $id);
        return $stmt->execute();
    }

    public function deleteBook($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM knihy WHERE idknihy = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
