<?php

$sname = "localhost";
$uname = "root"; // Corrected typo here
$password = "";
$db_name = "test_db";


//  Establish a database connection
// $host = "localhost";
// $dbname = "your_database_name";
// $username = "your_username";
// $password = "your_password";


$conn = mysqli_connect($sname, $uname, $password, $db_name);

//id`, `uname`, `password`, `name`,`email`, `phone

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}