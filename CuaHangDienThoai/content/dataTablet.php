<?php
	if(isset($_GET['page']))
		$page=$_GET['page'];
	else 
		$page=1;
	$Sanphamipad = DP::run_query("SELECT * FROM sanpham,loaisp where loaisp.idLoaisp = sanpham.idloaisp and loaisp.idLoaisp = ?",[1],2);
	$sophantutrongpage=8;
	$total_page=ceil(count($Sanphamipad)/$sophantutrongpage);
	$sodau=($page-1)*$sophantutrongpage;
	$arrSearch_Page=DP::run_query
	("SELECT * FROM sanpham,loaisp where loaisp.idLoaisp = sanpham.idloaisp and loaisp.idLoaisp = ? limit ?,?",[2,$sodau,$sophantutrongpage],2);
	$duongdan="tablet.php?";
?>