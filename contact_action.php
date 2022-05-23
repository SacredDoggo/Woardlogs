<?php
include("dbconnector/dbconnect.php");
$username=$_POST['username'];
$email=$_POST['email'];
$message=$_POST['message'];

if(isset($_POST['submit'])) {

	/* Check username  correctness*/
	$query="SELECT * FROM user_id WHERE username='$username'";
	$INSERT = "INSERT INTO messages(username, email, message) values(?, ?, ?)";
	$result=mysqli_query($conn , $query);
	if($result==FALSE) {
		echo"Username Doesn't Exists";
	}

	if(mysqli_num_rows($result) == 1) {
		session_start();
		$stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sss",$username, $email, $message);
		$stmt->execute();
		$stmt->close();
		header("Location: index.php");
	}
}
?>