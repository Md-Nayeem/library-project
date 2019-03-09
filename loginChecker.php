<?php 

	session_start();
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	include_once 'ConDbLb.php';
	$cn = connect();

	$sql = "select * from user where email ='$email' 	AND pass='$pass' ";
	$result = $cn->query($sql);
	if($result->num_rows > 0){
		foreach ($result as $row) {
			$_SESSION['user_name'] = $row['name'];
			$_SESSION['user_role'] = $row['role'];

		}

		$_SESSION['loggedin'] = true;
		header('location:index.php');
	}else{
		$_SESSION['msg'] = 'Invalid user';
		header('location:login_form.php');
	}



