<?php
include("dbconnector/dbconnect.php");
error_reporting(E_ALL ^ E_WARNING && E_NOTICE);
if(isset($_POST['submit'])){

	$username=$_POST['username'];
	$password=$_POST['password'];


	/* Check login correctness*/
	$query = "SELECT * FROM user_id WHERE username='$username' AND password='$password' ";
	$INSERT = "INSERT INTO login_history(username) values(?)";
	$result = mysqli_query($conn , $query);
	
	session_start();
	if(mysqli_num_rows($result) == 0){
		$_SESSION['invalidlogin'] = TRUE;
		header("Location: login.php");
	}

	if(mysqli_num_rows($result) == 1){
		$_SESSION['invalidlogin'] = FALSE;
		$stmt = $conn->prepare($INSERT);
        $stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->close();
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("Location: index.php");
	}
}
?>
