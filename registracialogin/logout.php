<?php
session_start();
session_destroy();
header("Location: /E-Kniznica/index.php");
exit;

