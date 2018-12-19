<?php


$username = $_POST['username'];
$password = $_POST['password'];
$errors = [];

if (empty($username)) {
	$errors[] = "please input your name";
}

if (preg_match("/[^A-Za-z\s]/", $username)) {
	$errors[] = "your name must only contain alphabets";
}

if (empty($password)) {
	$errors[] = "please input your password";
}

if (preg_match("/[^A-Za-z0-9\s]/", $password)) {
	$errors[] = "your password must only contain alphabets";
}
if (empty($errors)) {
	header('location: create_post.php');
}else{
	foreach ($errors as $error) {
		echo $error . "</br>";
	}
}