<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าหลัก</title>
	<link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/style.css"> 
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="box">
			<a class="search" href="../Train/insert_travel">เพิ่มข้อมูล</a>
			<br>
			<a class="search" href="../Train/show_travel">แสดงข้อมูล</a>
			<br><br><br>
		</div>
	</div>
</body>
</html>