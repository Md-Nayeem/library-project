<?php 

	function connect(){
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$dbName = 'library';

	$con = new mysqli($host,$user,$pass,$dbName);
	return $con;
	}

 ?>