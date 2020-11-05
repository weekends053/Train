<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Insert</title>
	<link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/style.css"> 
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<center><h1 class="regh1">ข้อมูลการเดินทาง</h1></center>
<center><form method="post" action="../Train/insert_Register">
    <table class="data">
    <tr>
    <td>ขบวน</td>
    <td><input name="t_id" type="text" id="t_id" size="30" maxlength="3"/></td>
  </tr>
  <tr>
    <td>หมายเหตุ</td>
    <td><input name="note" type="text" maxlength="50"/></td>
  </tr>
  <center><th>สถานีต้นทาง</th></center>
  <tr>
    <td>สถานี</td>
    <td><input name="s_name" type="text"  size="30" maxlength="50"/></td>
  </tr>
  <tr>
    <td>เวลาออก</td>
    <td><input type="text" name="Time_out"  /></td>
  </tr>
  <center><th>สถานีห้วยราช</th></center>
  <tr>
    <td>ถึง</td>
    <td><input name="H_Time_in" type="text" maxlength="5" /></td>
  </tr>
  <tr>
    <td>ออก</td>
    <td><input name="H_Time_out" type="text" maxlength="5" /></td>
  </tr>
  <center><th>สถานีปลายทาง</th></center>
  <tr>
    <td>สถานี</td>
    <td><input name="end_name" type="text"  size="30" maxlength="50"/></td>
  </tr>
  <tr>
    <td>ถึงเวลา</td>
    <td><input name="E_Time_in" type="text" maxlength="5" /></td>
  </tr>
</table>
  <div class="reg_button">
      <input class="button" name="submit" type="submit" value="เพิ่มข้อมูล" />
        &nbsp;
      <a class="search" href="../Train/index">ย้อนกลับ</a>
	</div>
</form></center>
<br>
</body>
</html>