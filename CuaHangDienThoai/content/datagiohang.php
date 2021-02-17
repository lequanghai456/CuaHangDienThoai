<?php
		if(isset($_GET['id']))
		{

			$idsanpham = $_GET['id'];
			
			$sanpham = DP::run_query('SELECT * From sanpham A,Nhacungcap B where A.Manhacungcap = B.MANCC and A.idsanpham =?',[$idsanpham],2);
		
			$anhdaidien = $sanpham[0]['anhdaidien'];
			$TenSP=$sanpham[0]['Tensp'];
			$Gia=$sanpham[0]['Gia'];
			$Donvi=$sanpham[0]['Donvi'];
			$TenNCC = $sanpham[0]['TenNCC'];
			
			if(isset($_SESSION['cart'][$idsanpham]))
			{
				$_SESSION['cart'][$idsanpham]['soluong']=$_SESSION['cart'][$idsanpham]['soluong']+1;
			}
			else
			{
				//them mot sach moi vao gio hang
				$_SESSION['cart'][$idsanpham]
				=array("id"=>$idsanpham,"Anhdaidien"=>$anhdaidien, 
				"TenSP"=>$TenSP, "Gia"=>$Gia,"Donvi"=>$Donvi,"TenNCC"=>$TenNCC,"soluong"=>1);
			}
		}
		
	?>