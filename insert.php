<?php
session_start();
$sql = "INSERT INTO users (firstname, lastname, username, email, phonenumber, password, confirmpassword)
 VALUES ('$firstName', '$lastName', '$userName', '$email', '$phoneNumber', '$password', '$confirmPassword')";

$done = $conn->exec($sql);

if($done){
    $_SESSION['message'] = '<h1>Welcome' . $_SESSION['username'] . '</h1>';
    header('location: index2.php');
    exit;
}