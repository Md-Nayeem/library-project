
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
 <div class="container">  

  <a class="navbar-brand" href="#">Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class=" nav justify-content-end">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Book Card</a>
      </li>
      <?php if(isset($_SESSION['loggedin'])){

      ?>
      <li class="nav-item">
        <a class="nav-link" href="Add_book_form.php">Add Book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?=$_SESSION['user_name']?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

  <?php } else{ ?>

      <li class="nav-item">
        <a class="nav-link" href="login_form.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg_form.php">Register</a>
      </li>

  <?php } ?>
      
    </ul>
  </div>
 </div>
</nav>



















