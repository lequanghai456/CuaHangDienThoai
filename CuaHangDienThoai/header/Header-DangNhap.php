
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
                                  <li class="nav-item">
                                    <a class="nav-link item-header login" style="<?php ?>" href=<?php echo $level.PAGE."Dangky.php"?>>Đăng kí</a>
                                  </li>
                              </ul> 
                                  
                            </div>
                            <form action ="<?php echo $level.PAGE."trangtimkiem.php?";?>" method ='GET' class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-3 search">
                                <div class="input">
                                    <div class="form-group">
                                        <input name ="timkiem" type="text" class="form-control" id="usr">
                                    </div>
                                </div>		
								
								<button class="btn-timkiem"type="submit">
									<i class="fas fa-search"></i>			
									<a style="text-decoration: none;"><i class="fas fa-search"></i></a>
								</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>