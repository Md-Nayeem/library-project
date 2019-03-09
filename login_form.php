<!-- This is the head -->
	<?php include_once 'Template/head.php'; ?>
	<!-- this is navbar -->
	<?php include_once 'Template/NavBar.php'; ?>

	<h1 class="text-center mt-5">Login Form</h1>
	
	<div class="container">
		<form class="mt-5" action="loginChecker.php" method="POST">	
		  <div class="form-group">
		    <label for="email">Email address</label>

		     <?php 
		    // if(isset($_SESSION['msg'])){
		    // 	$errClass = 'is-invalid';
		    // }else{
		    // 	$errClass = '';
		    // }
		     ?>

		    <input type="email" class="form-control <?=$errClass?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="pass">Password</label>
		    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<div class="text-center mt-5 text-danger font-weight-bold">
		<?php 

		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		 ?>
		 </div>



	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>