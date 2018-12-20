<?php

<<<<<<< HEAD
$servername = "localhost";
$Username = "root";
$password = "";
$dbName = "pcblog";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $Username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
=======

$servername = "localhost";
$username = "root";
$serverPassword = "root";
$dbName = "pcblog";

try{
    
    $conn = new PDO("mysql:host=$servername; dbname=$dbName", $username, $serverPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
>>>>>>> 1cac38aa5a954f1aabac67b8206f318b8bd574a9
catch(PDOException $e){
    echo $e->getMessage();
}