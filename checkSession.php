<?php
//  include("functions.php");

 if (!isLoggedIn()) {
 	session_destroy();
 	header("location: index.php");
 }