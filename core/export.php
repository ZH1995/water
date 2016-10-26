<?php

$movieName = $_POST["movieName"];
$coupon    = $_POST["coupon"];
$robTime   = $_POST["robTime"];

if (empty($movieName) || empty($coupon)) {
	die("影片信息录入错误");
}

echo $movieName . "\n";

$arrCoupon = explode("\n", $coupon);
foreach ($arrCoupon as $key => $value) {
	echo $value . "\t" ;
}
// 写入票务表、活动表、活动-票务表
