<?php
session_start();

include_once "functions.php";
if (isLoggedIn()) {
	$_SESSION = [];
	header("location: index.php");
}

header("location: index.php");