<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$tensanpham = $_POST['txttensanpham'];
	$anhdaidien = $_FILES['hinhanh']['name'];
	$gia = $_POST['txtgia'];
	$loaisp = $_POST['loaisanpham'];
	$nhacungcap = $_POST['nhacungcap'];
	$ketqua=DP::run_query("INSERT INTO sanpham(anhdaidien, Tensp, Gia, Donvi, idloaisp, Manhacungcap) VALUES (?,?,?,?,?,?)",[$anhdaidien,$tensanpham,$gia,'(VND)',$loaisp,$nhacungcap],3);
	move_uploaded_file($_FILES['hinhanh']['tmp_name'], $level.IMG.$_FILES['hinhanh']['name']);
	header("location:".$level.PAGE."admin-sanpham.php");
?>