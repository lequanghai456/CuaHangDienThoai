<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id = $_GET['id'];
	include($level.Content."data-suameovat.php");
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
	</header>
	<body>
		<?php
			include( $level.Header."Header-Admin.php");
			include( $level.Header."Menu.php");
		?>
		<div class="container">
			<div class="row">
				<div class="col-2">
					<div class="row">
						<div class="col-12">	
							</br><button type="button" class="btn btn-secondary btn-block">Thống kê</button>
							</br><button type="button" class="btn btn-secondary btn-block"><a style="color:white;text-decoration: none;" href="<?php echo $level."admin-sanpham.php"; ?>">Sản Phẩm</a></button>
							</br><button type="button" class="btn btn-secondary btn-block"><a style="color:white;text-decoration: none;" href="<?php echo $level."admin-tintuc.php"; ?>">Tin Tức</a></button>
							</br><button type="button" class="btn btn-secondary btn-block active"><a style="color:white;text-decoration: none;" href="<?php echo $level."admin-meovat.php"; ?>">Mẹo Hay</a></button>	
						</div>
					</div>		
				</div>
				
				<div class="col-10"  style="background-color: #7cfc005e;">
					</br>
				<form action="<?php echo $level.Content."sua-data-suameovat"; ?>" method="get">	
						<div class="row">
							<div class="col-2">Tiêu đề</div>
							<div class="col-10">
								<div class="form-group">
									<input type="text" class="form-control" name="txttieude" value="<?php echo $meovat[0]['tieude'];?>">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-2">Nội dung</div>
							<div class="form-group col-10">
							  <textarea class="form-control" rows="5" name="txtnoidung" id="comment"><?php echo $meovat[0]['noidung'];?></textarea>
							</div>
						</div>

						
						<div class="row">
							<div class="col-2 offset-5">
								<input type = "hidden" value= "<?php echo $meovat[0]['idchuyenmuc']; ?>" name="idchuyenmuc">
								<input type="submit" class="btn btn-primary" value="Sửa">	
							</div>								
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>