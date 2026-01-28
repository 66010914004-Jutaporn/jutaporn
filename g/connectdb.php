<?php
		$host = "localhost";
		$user = "root";
		$pwd = "#ve!kciEM35W";
		$db = "4004db";
		$conn = mysqli_connect($host, $user, $pwd, $db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
		mysqli_query($conn, "SET NAMES utf8");
?>