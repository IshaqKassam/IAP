<?php

    include_once './db.php';	
    include_once './user.php';
   $full_name = $_POST['fullname'];
   $email = $_POST['email'];
   $city = $_POST['address'];
   $password = $_POST['password'];

   $con = new DBConnector();
   $pdo = $con->connectToDB();

   //we want to register 



   $user = new User();
   //set the member variable
   $user->setFullName($full_name);
   $user->setEmail($email);
   $user->setCity( $city);
   $user->setPassword($password);

   echo $user->register($pdo);
?>