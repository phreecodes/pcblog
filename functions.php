<?php

<<<<<<< HEAD
function isLoggedIn()
{
	return isset($_SESSION['username']);
=======
if(isset($_SESSION['error'])){
    return $_SESSION;
>>>>>>> 1cac38aa5a954f1aabac67b8206f318b8bd574a9
}