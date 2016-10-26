<?php

$movieName = $_POST["movieName"];
$coupon    = $_POST["coupon"];

if (empty($movieName) || empty($coupon)) {
	die("影片信息录入错误");
}
echo $movieName;
echo $coupon;