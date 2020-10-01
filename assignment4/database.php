<!-- 
    Name: Sangeev Thapa Magar
    Date: 04/07/2020
    Subject: CS 355 (Advanced Web Programming)
    Assignment 4: PHP and MySQL 
-->
<?php
    $dsn = 'mysql:host=localhost;dbname=database';
    $username = 'public_user';
    $password = 'public';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>