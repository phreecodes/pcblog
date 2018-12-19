<?php
<<<<<<< HEAD
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
	$_SESSION['error'] = "please input your name";
	header("location: index.php");
	exit;
}

if (!preg_match("/^[A-Za-z]/", $username)) {
	$_SESSION['error'] = "your name must only contain alphabets";
	header("location: index.php");
	exit;
}

if (empty($password)) {
	$_SESSION['error'] = "please input your password";
	header("location: index.php");
	exit;
}

$sql = "SELECT * FROM login WHERE username='$username' && passwords='$password'";

include "connection.php";

$result = $conn->query($sql);

$user = $result->fetch(PDO::FETCH_ASSOC);


	if($username != $user['username']){
		$_SESSION['error'] = "Please Register";
		header("location: index.php");
		exit;
	}
	
	if($password != $user['password']){
		$_SESSION['error'] = "Please Register";
		header("location: index.php");
		exit;
	}


	$_SESSION['username'] = $user['username'];
	
	if($user['username'] === $_SESSION['username']){
		header("location: new_post.php");
		exit;
	}
=======


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
>>>>>>> 1cac38aa5a954f1aabac67b8206f318b8bd574a9
