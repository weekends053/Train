<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Travel</title>
     <link rel = "stylesheet" type = "text/css" 
     href = "<?php echo base_url(); ?>css/showtable.css"> 
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<center><table width="100%" border = "1">
        <tr>
            <th rowspan = "2" colspan = "1">ขบวน</th>
            <th colspan = "2">ต้นทาง</th>
            <th colspan = "2">ห้วยราช</th>
            <th colspan = "2">ปลายทาง</th>
            <th rowspan = "2" colspan = "1">หมายเหตุ</th>
        </tr>
        <tr>
            <td>สถานี</td>
            <td>เวลาออก</td>
            <td>ถึง</td>
            <td>ออก</td>
            <td>สถานี</td>
            <td>ถึงเวลา</td>
        </tr>
        <?php
            foreach($TM as $row){
        ?>
        <tr>
            <td colspan = "1"><?=$row->t_id;?></td>
            <td colspan = "1"><?=$row->s_name;?></td>
            <td colspan = "1"><?=$row->Time_out;?></td>
            <td colspan = "1"><?=$row->H_Time_in;?></td>
            <td colspan = "1"><?=$row->H_Time_out;?></td>
            <td colspan = "1"><?=$row->end_name;?></td>
            <td colspan = "1"><?=$row->E_Time_in;?></td>
            <td colspan = "1"><?=$row->note;?></td>
        </tr>
        <?php
            }
        ?>
      </table>
      <div class="container">
		<div class="box">
    <a class="search" href="../Train/insert_travel">เพิ่ม</a>
    <a class="search" href="../Train/index">ย้อนกลับ</a>
		</div>
    </center>
</body>
</html>