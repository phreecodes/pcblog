<?php

$servername = "localhost";
$Username = "root";
$password = "";
$dbName = "pcblog";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $Username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
}