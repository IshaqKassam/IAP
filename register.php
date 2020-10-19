<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> 
</head>
<style>
	.footer li{
		display:inline-block;
	}
	#register_body{
		
		background-color:#f2fbfd;
		background-size: cover;

	}
	.register_form{
		margin-left: 500px;
		width:600px;
		height:670px;
		background-color: white;
		padding-left: 60px;
	}
	#registerhead{
		padding-top:20px;
		margin-left: 150px;
	}
	.input-group{
		margin:20px;
	}
	
		
	#registerbtn{
		background-color: black;
		color:white;
		margin-left: 100px;
		width:70px;
	}
	</style>
<body id="register_body">
	<div class="registerwrapper">
		<div class="register_form">
		<h1 id="registerhead">Sign Up</h1>
		<form id="register_form" action="processregister.php" method="post"> 
			<p class="input-group">
				<label for="fname">Fullname</label>
				<input type="text" id="fname" name="fullname" class="form-control" placeholder="type your fullname"  required >
			</p>
			<!--<p class="input-group">
				<label for="lname">Lastname</label>
				<input type="text" id="lname" name="lastname" class="form-control" placeholder="type your lastname"  required>
           </p>-->
           <p class="input-group">
           	<label for="email">Email</label>
           	<input type="email" id="email" name="email" class="form-control" placeholder="type your email"  required>
           </p>
           <p class="input-group">
           	<label for="address">Address</label>
           	<input type="text" id="address" name="address" class="form-control" placeholder="type your address"  required>
           </p>
           <p class="input-group">
           	<label for="pass">Password</label>
           	<input type="password" id="pass" name="password" class="form-control" placeholder="type your password"  required>
           </p>

           <p class="input-group">
           	<input type="submit" id="registerbtn" name="registerbutton" class="form-control" value="register"  required>
           </p>
           <p class="input group">
           	Already have an account? <a href="login.php">Login</a>
           </p>
		</form>
		<div class="footer">
				<ul >
				<a href="#"><li>Terms of Conditions |</li></a>
				<a href="#">	<li>Privacy Policy |</li></a>
				<a href="#">	<li>Cookie Policy</li></a>
				</ul>
			</div>
          </div>
	</div>
	</body>