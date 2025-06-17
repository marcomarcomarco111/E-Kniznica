<?php
require_once '../config.php';
require_once '../classes/Newsletter.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
$email = trim($data['email'] ?? '');

$newsletter = new Newsletter($conn);
$result = $newsletter->addSubscriber($email);

if ($result === "Ďakujeme za prihlásenie.") {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => $result]);
}
