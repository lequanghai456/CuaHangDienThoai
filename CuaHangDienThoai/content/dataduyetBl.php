<?php
	include($level.LIB."DB.php");
	$binhluan = DP::run_query('SELECT idbinhluan,Tensp,nguoidang,noidung,ngaydang,anhdaidien,A.Trangthai From binhluan A,sanpham B where A.idsanpham = B.idsanpham',[],2);
?>