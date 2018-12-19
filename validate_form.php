<?php
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