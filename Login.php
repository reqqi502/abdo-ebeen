<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/Login.css">
</head>
<body>
    
<?php
include_once('./class/Login.php');
if(isset($_POST['btn'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
 $object = new user();
 $object->Login($email,$password);
}
?>

	<div class="form-container sign-in-container">
		<form action="" method="POST">
			<h1>L_O_G_I_N</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" /><br>
			<button type="submit" name="btn">Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Discover</button>
			</div>
		</div>
	</div>
</div>

<div class="footer">
	<b> Follow me on </b>
	<div class="icons">
		<a href="https://github.com/kvaibhav01" target="_blank" class="social"><i class="fab fa-github"></i></a>
		<a href="https://www.instagram.com/vaibhavkhulbe143/" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
		<a href="https://medium.com/@vaibhavkhulbe" target="_blank" class="social"><i class="fab fa-medium"></i></a>
		<a href="https://twitter.com/vaibhav_khulbe" target="_blank" class="social"><i class="fab fa-twitter-square"></i></a>
		<a href="https://linkedin.com/in/vaibhav-khulbe/" target="_blank" class="social"><i class="fab fa-linkedin"></i></a>
	</div>
</div>
</body>
</html>