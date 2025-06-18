<?php
class Kosik {
    private $conn;

    public function __construct($pdo) {
        $this->conn = $pdo;
    }

    public function pridaj($userId, $knihaId) {
        $sql = "INSERT IGNORE INTO kosik (ID_Pouzivatela, idknihy) VALUES (:userId, :knihaId)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['userId' => $userId, 'knihaId' => $knihaId]);
    }

    public function odstran($userId, $knihaId) {
        $sql = "DELETE FROM kosik WHERE ID_Pouzivatela = :userId AND idknihy = :knihaId";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['userId' => $userId, 'knihaId' => $knihaId]);
    }

    public function ziskajKosik($userId) {
        $sql = "SELECT k.* FROM knihy k
                JOIN kosik c ON k.idknihy = c.idknihy
                WHERE c.ID_Pouzivatela = :userId";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['userId' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function vymazKosik($userId) {
        $sql = "DELETE FROM kosik WHERE ID_Pouzivatela = :userId";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['userId' => $userId]);
    }
}
