<?php
    session_start();
    if(!(isset($_SESSION['user_email']) && $_SESSION['user_email']!="")){
        header("location:login.php");
    }
    // header("location: register.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container" id="container">
        <div class="profile-container">
            <img class="img" src="<?php echo "images/".$_SESSION['user_image'] ?>" alt="profile-pic">
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <div class="profile-panel">
                        <h1>My profile</h1>
                    <p class="Register">Full Name: <?php echo $_SESSION['user_name'] ?></p>
                    <p class="Register">Email: <?php echo $_SESSION['user_email'] ?></p>
                    <p class="Register">City of Residence: <?php echo $_SESSION['residence'] ?></p>
                    <button id="btn1" class="Register"><a href="change_password.php" style="text-decoration: none;">Change Password</a></button>
                    <br>                   
                    <button id="btn1" class="Register"><a href="logout.php" style="text-decoration: none;">Logout</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>