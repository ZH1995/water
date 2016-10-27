<?php

$email    = trim($_POST["email"]);
$password = trim($_POST["password"]);

if (empty($email) || empty($password)) {
	header("Location: ../web/error.php");
	exit;
} 

// 用户验权

echo $email . "\n" . $password . "\n";