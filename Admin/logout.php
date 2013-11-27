<?php
// Initialize a session.
session_start();

if (!isset ( $_SESSION ['name'] )) {
	require_once ("functions/functions.php");
	redirect();
	
} else { // Logout the user.
	$_SESSION = array(); // Destroy the variables.
	session_destroy(); // Destroy the session itself.
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="includes/style.css"/>
<title>Administrator Area</title>
</head>
<body>
<div id=wrapper>

<div id="mainPage">

<h3>You are now logged out.</h3>

</div>
</div>
</body>
</html>

