<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];

include("dbconnector/dbconnect.php");

if (!empty($username) || !empty($email) || !empty($password) || !empty($phoneCode) || !empty($phone))
{	
	if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else{
		$SELECT = "SELECT email FROM user_id WHERE email = ? LIMIT 1";
		$INSERT = "INSERT INTO user_id(username, email, password, phoneCode, phone) values(?, ?, ?, ?, ?)";
		
		$stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $stmt->fetch();
        $ernum = $stmt->num_rows;
		
		$stmt->close();
		
		$SELECTuser = "SELECT email FROM user_id WHERE username = ? LIMIT 1";
		$stmt = $conn->prepare($SELECTuser);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $stmt->fetch();
        $urnum = $stmt->num_rows;
		
		
		
		if ($ernum == 0 && $urnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssii",$username, $email, $password, $phoneCode, $phone);
		if ($stmt->execute()) {
            echo "Registered sucessfully.";
			header('Location: login.php');
            }
		}
        else {
			if(!$ernum == 0){
            echo "<script>alert(\"Someone already registered using this email\");</script>";
			}
			if(!$urnum == 0){
            echo "<script>alert(\"Someone already registered using this username\");</script>";
			}
        }
		$stmt->close();
	}
}else{echo"All feild are required...";
die();
}
?>