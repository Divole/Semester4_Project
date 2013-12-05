<?php include('functions/isLoggedin.php');?>

<div id="wrapper">
    <div id="header_topbar">
        <div id="welcome_msg" style="float: left; position: absolute"><?php echo "Welcome, {$_SESSION ['name']}!"; ?></div>
        <div style="position:absolute; right:10px;margin: 5px; width: 300px">
            <button class="buttons"><div id="newMessages"></div></button>
            <button class="buttons" style="float: left" onclick="">Logout</button>
        </div>
    </div>
</div>