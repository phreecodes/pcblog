<<<<<<< HEAD
<?php session_start(); ?>

<div id="registrations">
  <?php 
  include_once "header.php";
  include_once "functions.php";

  if(isLoggedIn()) {
    // header("location: new_post.php");
  }

  ?>
=======
<div id="registrations">
  <?php include_once "header.php" ?>
>>>>>>> 1cac38aa5a954f1aabac67b8206f318b8bd574a9

<link rel="stylesheet" href="etieyenestyle.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap/fonts/css/all.css">

<section class=" loginSection d-flex justify-content-center align-items-center">
    <div class="divLogin ">
<<<<<<< HEAD
    <?php
      if(isset($_SESSION['error'])) {
          echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
          unset($_SESSION['error']);
      }
    ?>
=======
        <div class="topLogin">
            
        </div>
>>>>>>> 1cac38aa5a954f1aabac67b8206f318b8bd574a9
<form action="validate_form.php" method="POST">
    <div class="divContainer">
        <!-- <label for="inputEmail3" class=" col-form-label text-white">Username</label> -->
  <div class="form-group row">
   
    <div class="col-md-12">
      <input type="text" name="username" class="form-control inputEmail input" placeholder="Username">
    </div>
  </div>
  <!-- <label for="inputPassword3" class=" col-form-label text-white">Password</label> -->
  <div class="form-group row">
    <div class="col-md-12">
      <input type="password" name ="password"class="form-control input"  placeholder="Password">
    </div>
  </div>
<<<<<<< HEAD
  <!-- <div class="form-group row">
    <div class="col-md-12 forgotText">
     <span class="text-danger lead ">Forgot password ?</span> 
    </div>
  </div> -->
=======
  <div class="form-group row">
    <div class="col-md-12 forgotText">
     <span class="text-danger lead ">Forgot password ?</span> 
    </div>
  </div>
>>>>>>> 1cac38aa5a954f1aabac67b8206f318b8bd574a9
  <fieldset class="form-group">
   
      <div class="form-group row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</div>
</form>
    
    </div>
</section>

<?php include_once "footer.php" ?>

<div>