<?php
	include($level.LIB."DB.php");
	$ketqua=DP::run_query("select Username,isAdmin from users where isAdmin = 0",[],2);
?>