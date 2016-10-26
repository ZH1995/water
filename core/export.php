<?php

$movieName = $_POST["movieName"];
$coupon    = $_POST["coupon"];

if (empty($movieName) || empty($coupon)) {
	die("影片信息录入错误");
}

echo $movieName . "\n";

$arrCoupon = explode("\n", $coupon);
foreach ($arrCoupon as $key => $value) {
	echo $value . "\t" ;
}
