<?php

/* Connection to database */
	$conn = mysqli_connect("localhost:3307","root","","project_st");
	
	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
