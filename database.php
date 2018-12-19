<?php

include('connection.php');

$sql = "CREATE TABLE users";

$result = $conn->exec($sql);

if($result){
    echo "Table createed successfully";
}