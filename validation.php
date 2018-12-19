<?php

session_start();

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phonenumber'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmpassword'];

$_SESSION['errors'] = [];


if(empty($firstName)){
    $_SESSION['errors'] = "Please input the first name";
}

if(!preg_match("/^[A-Za-z ]/", $firstName)){
    $_SESSION = "Only letters and white spaces are allowed";
}
if(empty($lastName)){
    $_SESSION = "Please input the first name";
}

if(!preg_match("/^[A-Za-z ]/", $lastName)){
    $_SESSION = "Only letters and white spaces are allowed";
}

if(empty($email)){
    $_SESSION['errors'] = "Please input an email address";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['errors'] = "Invalid email address";
}