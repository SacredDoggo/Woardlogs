<style>
.container-for-post{
	width: 65%;
	border-width: 1px;
	margin: auto;
	padding-top: 1%;
}
.title-for-post{
	border: 1px solid;
	border-radius: 3px;
	background-color: rgba(204, 204, 204, 0.95);
	text-align: center;
	padding: 4px;
	font-size: 130%;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	font-style: italic;
}
#author{
	float: right;
	padding-right: 10px;
	font-size: 50%;
	margin-top:10px;
}
.content-for-post{
	border: 1px solid;
	border-radius: 3px;
	background-color: rgba(204, 204, 204, 0.95);
	padding: 0px 10px;

}
.date-for-post{
	text-align: right;
	padding-right: 10px;
	padding-bottom: 2px;
	font-size: 65%;
	font-style: italic;
}
</style>

		<?php 
			$sql = "SELECT * FROM post ORDER BY post_id DESC";
			$result = mysqli_query($conn, $sql);

			// Find the number of records returned
			$num = mysqli_num_rows($result);
			$loopnum=$num-1;
			if($num > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<div class=\"container-for-post\"><div class=\"title-for-post\">
						". $row['post_title'] . "<div id=\"author\">- " .$row['post_author'] ."</div></div>". 
						"<div class=\"content-for-post\">".	$row['post_content'] . 
						"<div class=\"date-for-post\">" .$row['post_time'] . "</div></div>";
					if($loopnum){
					echo "<br><br>";
					$loopnum=$loopnum-1;
					}
					echo"</div>";
				}
			}
				else{
					echo"<center><h2 style=\"margin-top: 20%;\">No Posts available</h2></center>";
				}
?>
