<?php
require_once '../classes/User.php';
require_once '../config.php';

$user = new User($conn);
$user->logout();
exit;

