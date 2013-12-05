<?php
$is_messages = isset($_GET['action'])&& $_GET['action'] =='messages';
?>
<html>
<head>
    <title>Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <link rel="stylesheet" type="text/css" href="../stylesheets/fonts.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/admin_style.css">
    <script src="scripts/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="scripts/admin.js" type="text/javascript"></script>
    <script type="text/javascript" src="functions/msgTableFunctions.js"></script>
    <script type="text/javascript">updateNewMessages(); setInterval('updateNewMessages()', 15000);</script>

</head>
<body>
<div id="container">
    <div id="sidebar">
        <div id="pages">
            <?php require('page_list.php');?>
        </div>
        <div style="width: 200px; text-align: center">
            <button id="new_page" class="buttons" type="submit" name="new">Create Page</button>
        </div>
    </div>

    <?php require 'header.php'; ?>

    <div id="main">

        <div id="content">
            <?php require('content.php');?>
        </div>
    </div>
    <div id="gap"></div>
    <div id="saving_text" style="visibility: hidden">saving...</div>
</div>

</body>
</html>

