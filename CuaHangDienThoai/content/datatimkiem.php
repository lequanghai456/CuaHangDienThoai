<?php
	if(isset($_GET['page']))
		$page=$_GET['page'];
	else 
		$page=1;
	$key = "%".$_GET['timkiem']."%";
	$arrSearch=DP::run_query("SELECT * FROM sanpham WHERE sanpham.Tensp like  N?",[$key],2);
	$sophantutrongpage=8;
	$total_page=ceil(count($arrSearch)/$sophantutrongpage);
	$sodau=($page-1)*$sophantutrongpage;//(1-1)*8=0//(2-1)*8=8
	$arrSearch_Page=DP::run_query
	("SELECT * FROM sanpham WHERE sanpham.Tensp like  N? limit ?,?",[$key,$sodau,$sophantutrongpage],2);//0,7//8,15
	$key=$_GET['timkiem'];
	$duongdan="trangtimkiem.php?timkiem=".$key;
	/*header('location:tenfile.php');*/
?>
	<div>
		<?php echo "Kết quả tìm kiếm cho từ khóa ".$key." có ".count($arrSearch)." kết quả";
		?>
	</div>
	
