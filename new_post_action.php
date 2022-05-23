<?php
error_reporting(E_ALL ^ E_WARNING && E_NOTICE);
session_start();
$title=$_POST['title'];
$post=$_POST['post'];
$author=$_SESSION['username'];

include("dbconnector/dbconnect.php");

if(isset($_POST['publish'])){
	$INSERT = "INSERT INTO post(post_title, post_content, post_author) values(?, ?, ?)";
		
	$stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sss",$title ,$post, $author);
    
	if ($stmt->execute()) {
        echo "Posted sucessfully.";
		header("Location: index.php");
    }
    else {
        echo "Error";
    }
	$stmt->close();
}
?>