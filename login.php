<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="sign_up_form">
	<h1>Login Here</h1>
	<hr><!-- this is to draw a line to separate
	  -->
	<form action="web_actions.php" method="POST" >

		<input type="text" id="email" name="email" value="" required="required" class="Register"placeholder="Enter Email Address">
		<br>

		<input type="password" name="password" required="required" class="Register" placeholder="Enter your Password">
		<br>

		<!-- <input type="password" name="confirmPassword" required="required" class="Register" placeholder="Confirm your Password"> -->
		<br>

		<input id="btn1" type="submit" class="Register" name="login" value="Login" >
		<hr>
		<p><a href="register.php">Log In</a></p>

		
	</form>
</div>
</body>
</html>