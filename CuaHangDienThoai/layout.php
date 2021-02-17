<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Web Bán Điện Thoại Di Động</title>
	<link rel="stylesheet" href=<?php echo $level.Vendor."bootstrap-4/css/bootstrap.min.css";?>>
	<link href=<?php echo $level.Vendor."fontawesome-free-5.8.2\css\all.min.css";?> rel="stylesheet" type="text/css"/>
	<link href=<?php echo $level.CSS."style.css";?> rel="stylesheet" type="text/css" media="screen,print" />
	<script src=<?php echo $level.Vendor."js/jquery-3.2.1.slim.min.js";?>></script>
	<script src=<?php echo $level.Vendor."js/popper.min.js";?>></script>
	<script src=<?php echo $level.Vendor."bootstrap-4/js/bootstrap.min.js";?>></script>
</head>
<body>
	<?php
		include	($level.LIB."DB.php");
		include( $level.Header."Header.php");
		include( $level.Header."Menu-index.php");
		include ($level.Content."Datalayout.php");	
		if($IsSlideShow==true){
			include_once( $level.Header."SlideShow.php");
		}
	?>
	<div class="container content">
		
			<?php
			if($ListPhoneAndTablet==true)
			{
				echo '<div class="row">';
				include_once ($level.Content."Datalayout.php");
				include_once( $level.Content."ListPhoneAndTablet.php");
				include_once($level.Content."tintuc-meohay.php");
				echo '</div>';
			}
			if($ListPhones==true){
				echo '<div class="row">';
				include_once ($level.Content."dataphone.php");
				include_once($level.Content."ListPhone.php");
				include_once($level.Content."tintuc-meohay.php");
				echo '</div>';
			}
			if($ListTablets==true) {
				echo '<div class="row">';
				include_once( $level.Content."datatablet.php");
				include_once( $level.Content."ListTablet.php");
				include_once($level.Content."tintuc-meohay.php");
				echo '</div>';
			}
			if($timkiem == true)
			{
				echo '<div class="row">';
				include_once ($level.Content."datatimkiem.php");
				include_once($level.Content."Danhsachsanphamsearch.php");
				include_once($level.Content."tintuc-meohay.php");
				echo '</div>';
			}
			if($IsRegister==true)
			{
				echo '<div class="row">';
				include_once($level.Content."dataregister.php");
				include_once($level.Content."Chitiet_sp.php");
				include_once($level.Content."tintuc-meohay.php");
				echo '</div>';
			}
			if($Giohang == true)
			{
				include_once($level.Content."datagiohang.php");
				include_once($level.Content."giohang.php");
				
			}

			
	?>
	</div>
	<?php
		include( $level.Footer."Footer.php");
	?>
</body>