	<!-- This is the head -->
	<?php include_once 'Template/head.php'; ?>
	<!-- this is navbar -->
	<?php include_once 'Template/NavBar.php' ?>
	<div class="container">
		<h1 class="text-center mt-5" >New Account Registration</h1>
		<form action="reg.php" method="POST">
		  <div class="form-group mt-5">
		    <label for="Uname">Name</label>
		    <input type="text" name="Uname" class="form-control" id="Uname" placeholder="Enter name">
		  </div>	
		  <div class="form-group">
		    <label for="email">Email address</label>

		    <?php 
		    if(isset($_SESSION['msg'])){
		    	$errClass = 'is-invalid';
		    }else{
		    	$errClass = '';
		    }
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

		<?php 

		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		 ?>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>