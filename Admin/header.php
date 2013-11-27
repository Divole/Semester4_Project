<?php include('isLoggedin.php');?>

<div id="wrapper">
    <div id="header_topbar">
        <div id="welcome_msg"><?php echo "Welcome, {$_SESSION ['name']}!"; ?></div>
        <ul>
            <li><a onclick="loadPage('content', 'messages');" href="#">Messages <?php echo checkMessages($dbc);?></a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>