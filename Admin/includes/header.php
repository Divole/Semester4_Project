<?php include('isLoggedin.php');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="includes/style.css"/>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="functions/functions.js"></script>
<title>Administrator Area</title>
</head>
<body onload="loadPage('content', 'home');">
<div id="wrapper">
    <div id="header_topbar">
        <div id="welcome_msg"><?php echo "Welcome, {$_SESSION ['name']}!"; ?></div>
        <ul>
            <li><a onclick="loadPage('mainPage', 'messages');" href="#">Messages <?php echo checkMessages($dbc);?></a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<div id="mainmenu">
	<ul>
		<li><a onclick="loadPage('mainPage', 'home');" href="#">Home</a></li>
		<li><a href="#">About Me</a></li>
		<li><a href="#">Articles</a></li>
		<li><a href="#">Gallery</a></li>
		<li><a href="#">Links</a></li>
		<li><a href="#">Events</a></li>
		<li><a href="#">Contacts</a></li>
		<li><a href="#">Games</a></li>
		<li><a href="#">Users</a></li>
	</ul>
</div>



