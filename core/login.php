<?php

$email    = $_POST["email"];
$password = $_POST["password"];

if (empty($email) || empty($password)) {
	header("../web/error.php");
} 

// 用户验权

echo $email . "\n" . $password . "\n";