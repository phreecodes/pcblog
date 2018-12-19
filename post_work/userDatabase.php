<?php

// require "connect.php";
$tableUsers = "CREATE TABLE post(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     VARCHAR(255) NOT NULL,
    date_post DATE/TIME(200),
    content TEXT NOT NULL
)";