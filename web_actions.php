<?php
include_once 'db.php';
include_once 'user.php';

if(!isset($_SESSION)){
    session_start();
}

//PDO Handle

$con = new DBConnector();
$pdo = $con->connectToDB();

if (isset($_POST["register"])){
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userCity = $_POST["city"];
    $userPhoto = $_FILES["image"];
    $userPass = password_hash($_POST["password"], PASSWORD_DEFAULT);

    //user object
    $user = new User();
    $user->setFullName($userName);
    $user->setEmail($userEmail);
    $user->setPassword($userPass);
    $user->setCity($userCity);
    $user->setImage($userPhoto);

    $message = $user->register($pdo);
    echo $message;
    header("Location: login.php");
}

if (isset($_POST['login'])) {
    $userEmail = $_POST["email"];
    $userPass = $_POST["password"];

    $user = new User();
    $user->setEmail($userEmail);
    $user->setPassword($userPass);
    $user_details = $user->login($pdo);
    
    $_SESSION['user_id'] = $user_details['user_id'];
    $_SESSION['user_name'] = $user_details['user_full_name'];
    $_SESSION['user_email'] = $user_details['user_email'];
    $_SESSION['city'] = $user_details['city_of_residence'];
    $_SESSION['photo'] = $user_details['profile_photo'];

    header("Location: index.php");
}

if (isset($_POST['change-pass'])) {
    $userPass = password_hash($_POST["current-password"], PASSWORD_DEFAULT);
    $newPass = password_hash($_POST["new-password"], PASSWORD_DEFAULT);
    $confirmPass = $_POST['confirm-password'];

    if(password_verify($confirmPass, $newPass)){
        $user = new User();
        $user->setPassword($userPass);
        $user->setNewPass($newPass);

        $message = $user->changePassword($pdo);
        echo $message;
        // header("Location: /Simple-UI/templates/index.php");
    }else {
        echo "Passwords don't match";
    }
}
?>