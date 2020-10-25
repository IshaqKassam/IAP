<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="sign_up_form">
	<h1>Change Password</h1>
	<hr><!-- this is to draw a line to separate
	  -->
	<form action="web_actions.php" method="POST" >


        <input type="password" name="current-password" required="required" class="Register" placeholder="Enter your current Password">
		<br>
		
		<input type="password" name="new-password" required="required" class="Register" placeholder="Enter new Password">
		<br>

        <input type="password" name="confirm-password" required="required" class="Register" placeholder="Confirm new Password">
		<br>

		<!-- <input type="password" name="confirmPassword" required="required" class="Register" placeholder="Confirm your Password"> -->
		<br>

		<input id="btn1" type="submit" class="Register" name="change-pass" value="Change Password" >
		<hr>
		<p><a href="index.php">Go back</a></p>

		
	</form>
</div>
</body>
</html>