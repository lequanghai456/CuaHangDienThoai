<!-- Phân trang -->
    <div>
        <ul class="pagination justify-content-center w-100">
		<?php
		if($page-1!=0)
            echo '<li class="page-item"><a class="page-link" href='.$level.PAGE.$duongdan."&page=".($page-1).'>Trang trước</a></li>';
				for( $i=1;$i<=$total_page;$i++) 
				{
		?>
            <li <?php if($page == $i) echo "class='page-item active'"; ?>>
					<a class="page-link" href=<?php echo $level.PAGE.$duongdan."&page=".$i ?> >
						<?php echo $i; ?>
					</a>
				
			</li>
		<?php 
				} 
		if($page!=$total_page)
        echo '<li class="page-item"><a class="page-link" href='.$level.PAGE.$duongdan."&page=".($page+1).'>Trang sau</a></li>'
		?>
        </ul>
    </div>