<div class="col-xl-9 col-md-12 col-12">
	<!--Điều hướng-->
	<ul class="breadcrumb">
		<li><a href="<?php echo $level?>">Home</a></li>
		<li>Máy tính bảng</li>
	</ul>
	<div class="row">
		<!--Máy tính bảng-->
		<?php
			foreach ($arrSearch_Page as $post)
			{
		?>	
			<div class="col-lg-3 khung col-sm-6">
						<div class="thumbnail row">
							<img src=<?php echo $level.IMG.$post['anhdaidien'];?>>	
						<button class="Mua row btn"><p class="sp1"><br><br><?php echo $post['Tensp']?><br><?php echo $post['Gia']?></p></button>
						</div>
						<p class="row btn-consts">
						<a class="btn btn-warning col-6" href="<?php echo $level.PAGE."register.php?id=".$post['idsanpham']?>">Chi tiết</a>
						<a class="btn btn-success col-6" href="<?php echo $level.PAGE."giohang.php?id=".$post['idsanpham']?>">Giỏ Hàng</a>
						</p>
					</div>
		<?php
			}
		?>
	</div>
		<?php
			include( $level.Content."PhanTrang.php");
		?>
</div>