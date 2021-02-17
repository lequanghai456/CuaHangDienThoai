<?php
	$level="../";
	include ($level."config.php");
	include($level.LIB."DB.php");
	
	if(isset($_POST['dangky'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm =$_POST['confirm'];
		
		//var_dump($username,$password,$confirm);
		
		if($username != '' && $password != '' && $confirm != ''){
			//Kiểm tra tên đăng nhập có tồn tại không
			$KiemTra= DP::run_query('SELECT * FROM users where Username = ?',[$username],2);
			
			if (isset($KiemTra[0])) 
				echo "Tên đăng nhập này đã tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
			else
			{
				if($password == $confirm){
					$ketqua = DP::run_query("insert into users values (?,?,0)",[$username,$password],1);
					echo "Đăng ký thành công bạn muốn đăng nhâp? <a href=".$level.PAGE.'Dangnhap.php'.">Đăng nhập</a>";
				}
				else {
					echo "Mật khẩu nhập lại không giống. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
				}
			}
		}
		else{
			echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
		}
	}
?>