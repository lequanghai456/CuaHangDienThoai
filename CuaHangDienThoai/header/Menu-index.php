 <!--Menu-->
 <div id="top-container" class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-12 menu-container">
                <div class="row">
					<div class="col-12 menu-medium-container">
                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
							<a class="navbar-brand" href=<?php echo $level."index.php"?>>Trang chủ</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">

                                 <!-- Dropdown -->
									<li class="nav-item dropdown">
									  <a class="<?php if($ListPhones==true) echo 'navbar-brand';else 
									  echo 'nav-link'?> dropdown-toggle"  href=<?php echo $level.PAGE."phone.php"?> id="navbardrop" data-toggle="dropdown">
										Điện thoại
									  </a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#">Iphone</a>
											<a class="dropdown-item" href="#">SamSung</a>
											<a class="dropdown-item" href="#">Oppo</a>
											<a class="dropdown-item" href="#">Xiaomi</a>
											<a class="dropdown-item" href="#">Vsmart</a>
											<a class="dropdown-item" href="#">Realme</a>
										</div>
									</li>

									<!-- Dropdown -->
									<li class="nav-item dropdown">
										<a class="<?php if($ListTablets==true) echo 'navbar-brand';else 
									  echo 'nav-link'?> dropdown-toggle"  style="text-decoration: none;" href=<?php echo $level.PAGE."Tablet.php"?>  id="navbardrop" data-toggle="dropdown">
										Máy tính bảng 
										</a>
										<div class="dropdown-menu">
											
											<a class="dropdown-item" href="#">HP</a>
											<a class="dropdown-item" href="#">Asus</a>
											<a class="dropdown-item" href="#">Acer</a>
											<a class="dropdown-item" href="#">Lenovo</a>
											<a class="dropdown-item" href="#">Dell</a>
										</div>
									</li>
								</ul>
                            </div>  
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>