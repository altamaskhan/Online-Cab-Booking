<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	require "db.php";
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	

	$login = clean($_POST['username']);
	$password = clean($_POST['password']);
	

	$qry="SELECT * FROM admin WHERE username='$login' AND password='$password'";
	$result=mysql_query($qry);

	if($result) {
		if(mysql_num_rows($result) > 0) {

			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			session_write_close();

			header("location: admin/dashboard.php");
			exit();
		}else {
	
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>