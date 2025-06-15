<?php
class Database {
    private $host = "127.0.0.1";
    private $dbname = "Ekniznica";
    private $port = 3306;
    private $username = "root";
    private $password = "";

    public $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Chyba pripojenia: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>

