<?php
$level ="../";	
include	($level."config.php");
include	($level.LIB."DB.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$today = date("H:i:s a");
$nguoidang = $_GET['nguoidang'];
$noidung = $_GET['noidung'];
$id = $_GET['idsanpham'];
$result = DP::run_query("Insert into binhluan(idsanpham,noidung,nguoidang,ngaydang) 
value (?,?,?,?)",[$id,$noidung,$nguoidang,$today],3);
header('location:'.$level.PAGE."register.php?id=".$id);
?>