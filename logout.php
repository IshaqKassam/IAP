<?php

include_once 'db.php';
include_once 'user.php';

session_start();

//PDO Handle

$con = new DBConnector();
$pdo = $con->connectToDB();

$user = new User();
$user->logout($pdo);
header("Location:login.php")




?>