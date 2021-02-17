<?php
	session_start();
	$level="../";
	include ($level."config.php");
	include ($level.LIB."DB.php");
	if(isset($_SESSION['username']))
	{
		$ngaylaphoadon= getDate()['mon']."/".getDate()['mday']."/".getDate()['year'];
		$hoadon = DP::run_query("INSERT INTO hoadon(ngaylap,username) VALUES (?,?)",[$ngaylaphoadon,$_SESSION['username']],3);
		$mahoadon = DP::run_query("select mahoadon from hoadon where mahoadon=(select MAX(mahoadon) from hoadon)",[],2);
		$mahoadon1 = $mahoadon[0]['mahoadon'];
		var_dump($mahoadon1);
		$sql='INSERT INTO chitiethoadon(mahoadon,idsanpham,anhdaidien,tensanpham,gia,donvi,tennhacungcap,soluong) 
		VALUES';
	foreach( $_SESSION['cart'] as $post)
	{
		$id = $post['id'];
		$anhdaidien = $post['Anhdaidien'];
		$tensanpham = $post['TenSP'];
		$gia=$post['Gia'];
		$donvi=$post['Donvi'];
		$tenncc=$post['TenNCC'];
		$soluong=$post['soluong'];
		$sql=$sql."(".$mahoadon1.",".$id.",'".$anhdaidien."','".$tensanpham."',".$gia.",'".$donvi."','".$tenncc."',".$soluong."),";		
	}
	$sql=rtrim($sql,",");
	var_dump($sql);
	$chitiethoadon=DP::run_query($sql,[],3);
	unset($_SESSION['cart']);
	header('location:'.$level.PAGE."giohang.php");
	exit();
	}
	else
	{
		$level="../";
		echo "<div>";
		echo "<p align='center'><h1>Bạn cần phải đăng nhập</h1><br/><a href='$level.'index.php';'>Trở lại trang chủ</a></p>";
		echo "</div>";

	}
?>