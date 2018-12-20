<?php

$sql = "INSERT INTO users (firstname, lastname, username, email, phonenumber, password, confirmpassword)
 VALUES ('$firstName', '$lastName', '$userName', '$email', '$phoneNumber', '$password', '$confirmPassword')";

$done = $conn->exec($sql);

$_SESSION['message'] = "Thank you for registering, please proceed to login";
header('location: index2.php');
exit;