<div id="registrations">
  <?php include_once "header.php" ?>

<link rel="stylesheet" href="etieyenestyle.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap/fonts/css/all.css">

<section class=" loginSection d-flex justify-content-center align-items-center">
    <div class="divLogin ">
        <div class="topLogin">
            
        </div>
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
  <div class="form-group row">
    <div class="col-md-12 forgotText">
     <span class="text-danger lead ">Forgot password ?</span> 
    </div>
  </div>
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