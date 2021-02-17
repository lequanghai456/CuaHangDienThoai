<?php
	if(isset($_GET['page']))
		$page=$_GET['page'];
	else 
		$page=1;
	$Sanphamphone = DP::run_query("SELECT * FROM sanpham,loaisp where loaisp.idLoaisp = sanpham.idloaisp and loaisp.idLoaisp = ?",[1],2);
	$sophantutrongpage=8;
	$total_page=ceil(count($Sanphamphone)/$sophantutrongpage);
	$sodau=($page-1)*$sophantutrongpage;
	$arrSearch_Page=DP::run_query
	("SELECT * FROM sanpham,loaisp where loaisp.idLoaisp = sanpham.idloaisp and loaisp.idLoaisp = ? limit ?,?",[1,$sodau,$sophantutrongpage],2);
	$duongdan="phone.php?";
?>