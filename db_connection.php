<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "viktory_db";
$connection = mysqli_connect($host, $user, $pass, $host, $db_name);

//Check if the connection failed

if (!isset($connection)){
    die("DB connection failed!!!");
}