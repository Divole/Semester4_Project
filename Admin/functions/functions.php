<?php
//Filename: functions.php

function redirect(){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	@ob_end_clean(); // Delete the buffer.
	header ( "Location: ".$url."/index.php" );
	exit();
}

//function to check for new messages
function checkMessages($dbc){
	$q = "SELECT id FROM messages WHERE status=0";
	$r = mysqli_query ($dbc, $q); // Run the query.
	//Count the number of return rows
	$num_of_msgs = mysqli_num_rows($r);
	mysqli_free_result ($r); //Free up the resources.
	mysqli_close($dbc); //close database connection
	return $num_of_msgs;
}
