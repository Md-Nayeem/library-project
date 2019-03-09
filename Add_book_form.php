	
	
	<!-- This is the head -->
	<?php include_once 'Template/head.php'; 
	if(!isset($_SESSION['loggedin']) || $_SESSION['user_role'] != 1){
		header('location:login_form.php');
	}
	?>

	<!-- this is navbar -->
	<?php include_once 'Template/NavBar.php'; ?>

	<h1 class="text-center">Add New books</h1>

	






	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>