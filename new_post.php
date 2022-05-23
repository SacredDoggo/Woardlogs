<?php
include("dbconnector/dbconnect.php");
session_start();
error_reporting(E_ALL ^ E_WARNING && E_NOTICE);
if(!$_SESSION['username']){
	echo"<script>alert(\"Please login first!!!\");</script>";
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
    <link rel="stylesheet" href="new_post.css">
</head>
<body >
	<?php include("navbar.php"); ?>
    <div class="container-for-newpost">
        <form action="new_post_action.php" method="POST">
            <h1 id="title-name">Enter Title:</h1>
            <input id="title-input-area" name="title" placeholder="Title..."><br><br>
            <textarea id="textarea-content" name="post"></textarea><br>
            <button id="publish" name="publish" type="submit">Publish</button>
        </form>
    </div>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("textarea-content");
    </script>
</body>
</html>