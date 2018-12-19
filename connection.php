<?php


$servername = "localhost";
$username = "root";
$password = "root";
// $dbName = "project_create";

try{
    
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e){
    echo $e->getMessage();
}