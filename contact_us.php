<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact_us.css">
</head>

<body>
    <form action="contact_action.php" method="POST">
        <div class="form-box">
            <h1 id="form-heading">Contact Us</h1>
            <lable id="form-inqueries-text">Username</lable><br>
            <input type="text" id="name-box" name="username" placeholder="Username..." required><br><br>
            <lable id="form-inqueries-text">Email</lable><br>
            <input type="text" id="email-box" name="email" placeholder="Your Email..." required><br><br>
            
			<lable id="form-inqueries-text">Message</lable><br>
            <textarea id="message-box" name="message" placeholder="Type your message here..." required></textarea><br><br>
            <center>
                <button id="submit-button" type="submit" name="submit">Submit</button>
                <button id="reset-button" type="reset">Reset</button><br>
            </center>

        </div>
    </form>
</body>

</html>