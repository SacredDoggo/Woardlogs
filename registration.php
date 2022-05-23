<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body>
    <form action="registration_action.php" method="POST">
        <div class="form-box">
            <h1 id="form-heading">Sign-up Here!</h1>
            <lable id="form-inqueries-text">Username</lable><br>
            <input type="text" id="name-box" name="username" placeholder="Username..." required><br><br>
            <lable id="form-inqueries-text">Email</lable><br>
            <input type="text" id="email-box" name="email" placeholder="Your Email..." required><br><br>
            <lable id="form-inqueries-text">Password</lable><br>
            <input type="password" id="password-box" name="password" placeholder="Password..." required><br><br>

            <lable id="form-inqueries-text">Phone</lable><br>
            <div class="phone">
                <select id="phone-directors" name="phoneCode">
                    <option value="91">+91</option>
                    <option value="97">+97</option>
                    <option value="23">+23</option>
                    <option value="1">+1</option>
                </select><input type="text" id="phone-box" name="phone" placeholder="Phone..." required><br>
            </div><br>
            <center>
                <button id="submit-button" type="submit">Register</button>
                <button id="reset-button" type="reset">Reset</button><br>
            </center>
            <p id="already-registered-signin">Already have an account? 
                <a href="login.php">Sign in</a></p>
        </div>
    </form>
</body>

</html>
