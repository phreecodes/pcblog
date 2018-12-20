<?php include('functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<?php
?>
<body>
    <section class="container"><!-- HEADER-->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            
            <img src="images/HP_logo.png" alt="logo" height="50px">
            <!-- <i class="fa fa-btc" height=""></i> -->
            <a class="navbar-brand ml-2 font-weight-bold" href="#">BLOG</a>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <?php if(isLoggedIn()){
                echo '<p class="mt-3"> Welcome ' . $_SESSION["username"] . '</p>';
                echo '
                <li class="nav-item active">
                    <a class="nav-link" href="cardPost.php"><input type="submit" class="btn btn-dark" value="View Posts"></a>
                </li>
                ';

                echo '<li class="nav-item active">
                <a class="nav-link" href="logout.php"><input type="submit" class="btn btn-danger" value="Log Out"></a>
            </li>';
            
            }
            else{
                echo '<li class="nav-item active">
                <a class="nav-link" href="index2.php"><input type="submit" class="btn btn-primary" value="Register"></a>
            </li>';
            } ?>
                
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Log in</button>
            </form> -->
        </div>
    </nav>
    </section>
</body>
</html>