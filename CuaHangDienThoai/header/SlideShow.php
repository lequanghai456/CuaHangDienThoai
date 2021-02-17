	<!--Slideshow-->
	<div class="container content-slideshow">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
			</ul>
			<div class="carousel-inner">
				<?php
				foreach ($slideshow as $post)
				{
				?>
				<div class="<?php echo $post['class'];?>">
					<img src=<?php echo $level.IMG.$post['anh'];?> width="100%" height="300">
				</div>
				<?php
				}
				?>
			</div>
			
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>