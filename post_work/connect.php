<?php
$servername = "localhost";
$username = "root";
$myPassword = "";
$dbname = "pcBlog";

try {
    // $tablePost = "CREATE TABLE post(
    //     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     title VARCHAR(255) NOT NULL,
    //     date_post DATE,
    //     content TEXT
    // )";
   
    // $users = "CREATE TABLE post(
    //          id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //          First_name VARCHAR(255) NOT NULL,
    //          Last_name VARCHAR(255) NOT NULL,
    //          Email VARCHAR(255) NOT NULL,
    //          Phone_number INT(255) NOT NULL,
    //          Password VARCHAR(255) NOT NULL
    //          )";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $myPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }