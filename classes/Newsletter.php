<?php
class Newsletter {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addSubscriber($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Neplatný e-mail.";
        }

        $stmt = $this->conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            return "Ďakujeme za prihlásenie.";
        } else {
            return "Tento e-mail už možno existuje.";
        }
    }
}
