<div class="col-xl-3 col-md-12 col-12">
    <div class="row">
		<div class ="col-12">
			<h4 class="bg-danger text-white text-center p-1">Sản Phẩm Hot</h4>
			<div class="row">
					<?php
						foreach ($Sanphamhot as $post)
						{
						?>
							<div class="col-12 col-xl-12 col-md-6">
								<div class="thumbnail row">
									<img src=<?php echo $level.IMG.$post['anhdaidien'];?>>
									<button class="Mua row btn"><p class="sp1"><a style="text-decoration: none;" href="<?php echo $level.PAGE."register.php?id=".$post['idsanpham']?>"><br><br><?php echo $post['Tensp']?></a><br><?php echo $post['Gia']?></p></button>
								</div>
							</div>
						<?php
						}
					?>
			</div>
		</div>
		<div class="col-md-12 mb-2">
		    <button type="button" class="btn btn-info w-100">Xem thêm</button>
		</div>
	</div>
	</br>
		
		<div class="row">
					<div class ="col-12">
						<h4 class="bg-danger text-white text-center p-1">Tin Tức</h4>
						<ul>
						<?php
						foreach($Tintuc as $post)
						{
						?>
							<li><a href="#"><?php echo $post['noidung']?></a></li>
						<?php
						}
						?>
						</ul>
					</div>
			<div class="col-md-12 mb-2">
				<button type="button" class="btn btn-info w-100">Xem thêm</button>
			</div>
		</div>
		</br>
		<div class="row">
			<div class="col-12">
				<h4 class="bg-danger text-white text-center p-1">Mẹo Hay</h4>
				<ul>
							<?php
							foreach($Meohay as $post)
							{
							?>
							<li><a href="#"><?php echo $post['noidung']?></a></li>
							<?php
							}
							?>
				</ul>
			</div>
			<div class="col-md-12 mb-2">
				<button type="button" class="btn btn-info w-100">Xem thêm</button>
			</div>
		</div>
</div>