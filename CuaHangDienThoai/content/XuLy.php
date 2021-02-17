<?php
	session_start();
	$level="../";
	include ($level."config.php");
	include($level.LIB."DB.php");
	if (isset($_POST['dangnhap']))
	{
		//Lấy dữ liệu nhập vào
		$username = $_POST['username'];
		$password = $_POST['password'];
		   
		//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
		if ($username && $password)
		{
			//Kiểm tra tên đăng nhập có tồn tại không
			$KiemTra= DP::run_query('SELECT * FROM users where username = ?',[$username],2);
			if (isset($KiemTra[0])) {
				if ($KiemTra[0][1] == $password)
				{
					//Lưu tên đăng nhập
					$_SESSION['username'] = $username;
					$_SESSION['isadmin']=$KiemTra[0][2];
					header('location:'.$level.'index.php');
				}
				else{
					echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
				}
			} else{
				echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
			}
		}
		else
		{
			echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
		}
	}
		else
		{
			echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
		}
?>