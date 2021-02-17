<?php
	include($level.LIB."DB.php");
	$sanpham = DP::run_query('SELECT sanpham.idsanpham,sanpham.Tensp,sanpham.Gia,sanpham.anhdaidien,nhacungcap.TenNCC,loaisp.Tenloaisp FROM sanpham,loaisp,nhacungcap 
	WHERE sanpham.idloaisp=loaisp.idLoaisp and nhacungcap.MANCC=sanpham.Manhacungcap',[],2);
	$nhacungcap = DP::run_query('select * from nhacungcap',[],2);
	$loaisp = DP::run_query('select * from loaisp',[],2);
?>