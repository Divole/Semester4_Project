<?php		
require_once ("../../../dbcons/dbc_s4webdev.php");

if (isset ( $_POST ['submitted'] )) { // Check if the form has been submitted.
	
	// Check for an email address.
	if (stripslashes(trim($_POST['login']))) {
		$l = mysqli_real_escape_string($dbc, trim($_POST['login']));
	} else {
		$l = FALSE;
	}
	
	if (stripslashes(trim($_POST['password']))) {
		$p = mysqli_real_escape_string($dbc, trim($_POST['password']));
	} else {
		$p = FALSE;
	}
	
	// Query the database.
	if ($l && $p) {
		
		$q="SELECT name, surname FROM admins WHERE login=? AND password=SHA1(?)";
		$statement = $dbc->prepare($q);
		$statement->bind_param( "ss", $l, $p);
		$statement->execute();
		$statement->bind_result($name, $surname);
		$statement->store_result();
	
		if ($statement->num_rows==1) {
			session_start();
			while ($statement->fetch()) {
				$_SESSION ['name'] = trim($name." ".$surname);
			}
			
			$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
			header ( "Location: ".$url."/admin.php" );
			
		} else {
			echo "Please provide valid credentials.";
	
		}
		$statement->free_result();
		$statement->close();
		$dbc->close();
		//exit();
	} else { 
		echo '<p><font color="red" size="+1">Please provide valid credentials.</font></p>';
	}
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

<h1>Login</h1>

<form action="index.php" method="post">
	<fieldset>
		<label>Login:</label> <input type="text" name="login" size="20" maxlength="40" required />
		<br>
		<label>Password:</label> <input type="password" name="password" size="20" maxlength="40" required />
	</fieldset>	
	<input class="submitButton" type="submit" name="submit" value="Login" />
	<input type="hidden" name="submitted" value="TRUE" />
</form>

 </div>
 </div>
 </body>
 </html>

