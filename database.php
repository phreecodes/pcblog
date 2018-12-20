<?php

include('connection.php');

$sql = file_get_contents("pcblog.sql");

// $sql = "CREATE TABLE posts(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     title VARCHAR(255) NOT NULL,
//     content VARCHAR(255) NOT NULL,
//     post_date TIMESTAMP NOT NULL
// )";

// $addTable = "ALTER TABLE users ADD username VARCHAR(30) NOT NULL AFTER lastname";

$result = $conn->exec($addTable);

if($result){
    echo "Table createed successfully";
}
