<?php 

	session_start();
	unset($_SESSION['loggedin']);
	unset($_SESSION['user_role']);
	header('location:index.php');

 ?>