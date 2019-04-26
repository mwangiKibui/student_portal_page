<?php 
    include_once 'config.php';
	//shall use extract
	extract($_POST);
	$hashed_pwd = md5($password);
	$sql = mysqli_query($con,"SELECT * FROM admin WHERE username = '$username' AND password = '$hashed_pwd'");
	$result = mysqli_num_rows($sql);
	if ($result) {
	header("Location: student_reg.php");
	}else{
		
		//start an error session
		$_SESSION['error'] = "1";
		header("Location: index.php");
	}
	



 ?>