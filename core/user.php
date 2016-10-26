<?php

class user {
	private $_name;
	private $_password;
	private $_email;

	private $_serverName = "localhost";
	private $_username   = "root";
	private $_password   = "woSJM95119";

	public function __construct($name, $password, $email='') {
		$this->_name     = $name;
		$this->_password = $password;
		$this->_email    = $email; 
	}

	// 用户是否存在
	public static function isExist() {
		
		$conn = new mysqlli($this->_serverName, $this->_username, $this->_password);
		if ($conn->connect_error) {
			return array(
				"errno"   => 1,
				"message" => "数据库连接失败",
			);
		}
		$sql = "select count(1) as cnt from tbluser where uname='" . $this->_username . "' and password='" . $this->_password . "'";
		$ret = $conn->query($sql);
		$conn->close();
		if ($ret->num_rows > 0) {
			return array(
				"errno"   => 0,
				"message" => "",
			);
		}
		
		return array(
			"errno"   => 1,
			"message" => "用户不存在",
		);
	}

	// 管理员验权
	public static function isAdmin() {
		$conn = new mysqlli($this->_serverName, $this->_username, $this->_password);
		if ($conn->connect_error) {
			return array(
				"errno"   => 1,
				"message" => "数据库连接失败",
			);
		}
		$sql = "select power from tbluser where uname='" . $this->_username . "' and password='" . $this->_password . "'";
		$ret = $conn->query($sql);
		$conn->close();
		if ($ret[0]['power'] == 766) {
			return array(
				"errno"   => 0,
				"message" => "",
			);
		}
		return array(
			"errno"   => 1,
			"message" => "用户不具有管理员权限",
		);
	}

	// 用户注册
	public static function register() {
		$isExist = self::isExist();
		if ($isExist['errno'] == 0) {
			return array(
				'errno'   => 1,
				'message' => "用户已存在",
			);
		}

		$conn = new mysqlli($this->_serverName, $this->_username, $this->_password);
		if ($conn->connect_error) {
			return array(
				"errno"   => 1,
				"message" => "数据库连接失败",
			);
		}
		$now = time();
		$sql = "insert into tbluser (uname, password, email, createtime) values ({$this->_name}, {$this->_password}, {$this->_email}, {$now})";
		$ret = $conn->query($sql);
		if ($ret == true) {
			return array(
				"errno"   => 0,
				"message" => "",
			);
		}
		return array(
			"errno"   => 1,
			"message" => "用户注册失败",
		);
	}
}