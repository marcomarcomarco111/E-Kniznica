<?php
class Oblubene {
    private $conn;

    public function __construct($pdo) {
        $this->conn = $pdo;
    }

    public function ziskajOblubene($userId) {
        $sql = "SELECT k.* FROM knihy k
                JOIN oblubene o ON k.idknihy = o.idknihy
                WHERE o.ID_Pouzivatela = :userId";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['userId' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function pridaj($userId, $knihaId) {
        $sql = "INSERT IGNORE INTO oblubene (ID_Pouzivatela, idknihy) VALUES (:userId, :knihaId)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['userId' => $userId, 'knihaId' => $knihaId]);
    }

    public function odstran($userId, $knihaId) {
        $sql = "DELETE FROM oblubene WHERE ID_Pouzivatela = :userId AND idknihy = :knihaId";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['userId' => $userId, 'knihaId' => $knihaId]);
    }


}
