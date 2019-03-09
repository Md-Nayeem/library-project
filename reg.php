<?php 

	session_start();
	$name = $_POST['Uname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	include_once 'ConDbLb.php';
	$cn = connect();

	$sql_e = "select * from user where email ='$email' ";
	$res_e = $cn->query($sql_e);
	if($res_e->num_rows > 0){
		$_SESSION['msg'] = 'Sorry email already taken';
		header('location:reg_form.php');
		// exit;
	}
	else{
		$sql = "INSERT INTO user (name,email,pass)
		VALUES('$name','$email','$pass')";
		if($cn->query($sql)){
			echo 'saved successfully';
		}
	}



 ?>