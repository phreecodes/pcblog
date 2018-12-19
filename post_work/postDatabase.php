<?php

// require "connect.php";
$tablePost = "CREATE TABLE post(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        date_post DATE/TIME,
        content TEXT NOT NULL
    )";
    $result= $conn->exec($tablePost);
     if ($result) {
         echo "Student select Successfully";
     } else {
         echo "Unable to select student - Back off!!!";
     }
     