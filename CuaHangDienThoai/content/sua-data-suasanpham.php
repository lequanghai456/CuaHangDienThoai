<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id=$_POST['id'];
	$tensanpham=$_POST['txttensanpham'];
	$anhdaidien=$_FILES['hinhanh'];
	$gia=$_POST['txtgia'];
	$nhacungcap=$_POST['nhacungcap'];
	$loaisanpham=$_POST['loaisanpham'];
	var_dump($_FILES);
	if($anhdaidien['name'] == '')
		$ketqua=DP::run_query("UPDATE sanpham SET Tensp=?,Gia=?,idloaisp=?,Manhacungcap=? WHERE idsanpham=?",[$tensanpham,$gia,$nhacungcap,$loaisanpham,$id],1);
	else 
	{
		$ketqua=DP::run_query("UPDATE sanpham SET anhdaidien=?,Tensp=?,Gia=?,idloaisp=?,Manhacungcap=? WHERE idsanpham=?",[$anhdaidien['name'],$tensanpham,$gia,$nhacungcap,$loaisanpham,$id],1);
		move_uploaded_file($_FILES['hinhanh']['tmp_name'], $level.IMG.$_FILES['hinhanh']['name']);
	}	
	header("location:".$level.PAGE."admin-sanpham.php");
?>