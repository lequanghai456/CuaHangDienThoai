	<!--Header-->
	<header >
        <div id="top-container" class="top-header bg-danger">
            <div class="container menu">
                <div class="row">
                    <div class="col-12 header-container">
                        <div class="row">
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 logo" >
                                <img src=<?php echo $level.IMG."logo.jpg";?> alt="" class="logo">
                            </div>
                            <div class="col-xl-8  col-lg-8 col-md-7 col-sm-7 col-8 menu-header">
                                <ul class="nav nav-pills header">
                                  
								  <?php
                                    if(isset($_SESSION['username']))
									{ 
										echo '<li class="nav-item dropdown">';
										echo '<a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">';
										echo $_SESSION['username'];
										echo '</a>';
										echo '<div class="dropdown-menu">';
										echo	'<a class="dropdown-item" href='.$level.Content.'XuLyDangXuat.php'.'>Đăng xuất</a>';
										if($_SESSION['isadmin']==1){
								  ?>
											<a class="dropdown-item" href="<?php echo $level.PAGE.'admin-sanpham.php';?> ">Quản lý</a>
											<a class="dropdown-item" href="<?php echo $level.PAGE.'layoutduyetBL.php';?>">Duyệt bình luận</a>										
								  <?php
										}
										echo '</div>';
										echo '</li>';
									}
									else
									{
										echo '<li class="nav-item">';
										echo '<a class="nav-link item-header"  href='.$level.PAGE."Dangky.php".'>Đăng kí</a>';
										echo '</li>';
										echo '<li class="nav-item">';
										echo '<a class="nav-link item-header"  href='.$level.PAGE."Dangnhap.php".'>Đăng nhập</a>';
										echo '</li>';
									}
                                  ?>
                              </ul> 
                                  
                            </div>
                            <form action ="<?php echo $level.PAGE."trangtimkiem.php?";?>" method ='GET' class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-3 search">
                                <div class="input">
                                    <div class="form-group">
                                        <input name ="timkiem" type="text" class="form-control" id="usr">
                                    </div>
                                </div>		
								
								<button type="submit">
									<i class="fas fa-search"></i>			
									<a style="text-decoration: none;"></a>
								</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>