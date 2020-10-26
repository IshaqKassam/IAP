<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="sign_up_form">
	<h1>Register Here</h1>
	<hr><!-- this is to draw a line to separate
	  -->
	<form action="web_actions.php" method="POST" enctype="multipart/form-data">

		<input type="text" id="fname" name="name" value="" required="required" placeholder="Enter your Full Name" class="Register">
		<br>

		<input type="text" id="email" name="email" value="" required="required" class="Register"placeholder="Enter Email Address">
		<br>

		<input type="text" name="city" name="city" placeholder="Enter City Of Residence" class="Register" required="required">
		<br>

		<input type="password" name="password" required="required" class="Register" placeholder="Enter your Password">
		<br>

		<input type="password" name="confirm_password" required="required" class="Register" placeholder="Confirm your Password">
		<br>

		<!-- <input type="password" name="confirmPassword" required="required" class="Register" placeholder="Confirm your Password"> -->
		<br>

		<label for="image">Upload Profile Pic</label><br>
		<input type="file" name="image" id="image">
		<br><br>

		<input id="btn1" type="submit" class="Register" name="register" value="Register" >
		<hr>
		<p id="btn1" class="Register"><a href="login.php" style="text-decoration: none;" >Log In</a></p>

		
	</form>
</div>
</body>
</html>