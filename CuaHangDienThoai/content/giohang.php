 <style type="text/css">
        .xoa{
            display:inline-block;
            border:1px solid #73AD21;
            background-color:#73AD21;
            padding:10px 12px;
            box-shadow:2px 2px 5px #6c6969;
            text-decoration:none;
            border-radius:3px;
            color:white;
        }
		.xoa:hover{
            border:1px solid #90d331;
            background-color:#90d331;
        }
        .xoa:active{
            border:1px solid #669f15;
            background-color:#669f15;
        }
    </style>
<?php
if(isset($_POST['capnhat']))
{
	foreach($_POST as $id=>$soluong)
	{
		if(($soluong > 0) and (is_numeric($soluong)))
		{
			$_SESSION['cart'][$id]['soluong']=$soluong;
		}
		else
		{
			unset ($_SESSION['cart'][$id]);
		}
	}
}
?>
<!--Tiêu đề-->
   
	
<?php
$Tongtien=0;
$checkcart=false;
if(isset($_SESSION['cart']))
{
	foreach($_SESSION['cart'] as $phantu)
	{
		if(isset($phantu))
		{
			$checkcart=true;
		}
	}
}



if($checkcart == true)
{
?>
<div class="row">
	<div class="col-12">
		<h1>Giỏ Hàng Của Bạn</h1>
	</div>
</div>
<?php
foreach($_SESSION['cart'] as $post){
?>
	<form action='<?php echo $level.PAGE.'giohang.php'?>' method='POST'>
		<br>
		<div class="row">
			<div class="col-4">
			<img src=<?php echo $level.IMG.$post['Anhdaidien'];?> style="width: 60%; height: 100%;" alt="">
				</div>
                <div class="col-6">
					<div>
                        <p>Tên sản phẩm:<?php echo $post['TenSP']; ?> </p>
                        <p>Giá sản phẩm:<?php echo $post['Gia'].$post['Donvi']; ?></p>
						<p>Nhà cung cấp:<?php echo $post['TenNCC'];?></p>
						<p>So Luong:<input type='text' name="<?php echo $post['id'];?>" 
						size='5' value="<?php echo $post['soluong'];?>"></p>
                    </div>
                </div>
				<div class ="col-2"> 
					<a class='xoa' href="<?php echo $level.Content.'xoagiohang.php?id='.$post['id'];?>"><i class="fa fa-trash text-center"><br>Xóa mặt hàng</a></i>
					</button>
					</div>
                </div>
				<br>

		<br>
<?php
$Tongtien+=$post['soluong']*$post['Gia'];
}
?>
					<div class="hidden-xs text-center"><strong>Tổng:<?php echo number_format($Tongtien).$post['Donvi'];?></strong>
					<div class="hidden-xs text-center"><strong><a href="<?php echo $level.PAGE.'hoadon.php'; ?>" class="btn">Thanh toán <i class="fa fa-angle-right"></i></a></strong>
					</div>
					<div class = 'row'>
					<div class="col-4"><b><a href="<?php echo $level."index.php";?>">Tiếp tục mua hàng</a><br><a  href="<?php echo $level.Content.'xoagiohang.php?id=0'?>><i class="fa fa-angle"></i>Xóa toàn bộ giỏ hàng</a></b>
					</div>
					<button name = 'capnhat' class="btn btn-info btn-sm"><i class="fa fa-edit"><p>Cập Nhật</p></i>
					</button>
					
					
					</div>
							</form>
<?php
	}
	else
	{
		$level='../';
		echo "<div>";
		echo "<p align='center'><h1>Giỏ Hàng Trống</h1><br/><a href= '$level.'index.php';'>Trở lại trang chủ</a></p>";
		echo "</div>";
	}
?>