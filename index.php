<?php
session_start();
include("./php/navigator.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to our system!</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/navbar.css">
	<link rel="stylesheet" href="./css/footer.css">
	<style>
		main {
			height: 100%;
		}
	</style>
</head>

<body>
	<?php include('./header.php') ?>
	<main>
		<div class="loginbox">
			<fieldset>
				<legend><?php echo $error; ?></legend>
				<form method="post" action="">
					<h1>Login</h1><br />
					<p>Username</p>
					<input type="text" name="user_name" placeholder="Enter Username"><br />
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password"><br />
					<br><br>
					<input type="submit" name="submit" value="Login">
					<br><br>
					<div style="text-align:center">
						<p class="signup">Don't have an account? <br> <br>


							Sign Up as an <br />
							<a href="./applicant/signup.php"> Applicant </a> <br />
							or <br />
							<a href="./employer/signup.php"> Employer</a>
					</div>
					</p>
				</form>
			</fieldset>
		</div>
	</main>
	<?php include('./footer.php') ?>

</body>

</html>