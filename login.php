<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>
    <form action="login_action.php" method="POST">
        <div class="login-box">
            <h1 id="form-heading">Login</h1>
            <center>
            <input type="text" id="text-box" name="username" placeholder="Username..." required><br>
            <input type="password" id="text-box" name="password" placeholder="Password..." required><br>
			</center>
			<?php
			error_reporting(E_ALL ^ E_WARNING && E_NOTICE);
			session_start();
			if($_SESSION['invalidlogin'] == TRUE){
				echo"<div class=\"invalid-login\">*invalid username or password!</div>";
			}
			?>
			<center>
            <button id="submit-button" type="submit" name="submit">Login</button><br>
            <p id="already-registered-signin">Don't have an account?<a href="registration.php">Sign up</a></p>
            </center>
        </div>
    </form>
</body>
</html>
