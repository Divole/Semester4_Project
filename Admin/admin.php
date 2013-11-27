<?php
$is_new_page = isset($_GET['action'])&& $_GET['action'] =='addpage';
?>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../stylesheets/fonts.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/admin_style.css">
    <script src="../scripts/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="functions/functions.js"></script>
    <script src="../scripts/admin.js" type="text/javascript"></script>
</head>
<body>
<div id="container">

    <div id="sidebar">
        <div id="pages_title"><h3>Pages:</h3></div>
        <div id="pages">
            <?php
            require('C:\xampp/htdocs/Semester4_Project/admin/database_con.php');
            $res = $mysqli->query("SELECT name FROM pages");
            $res->data_seek(0);
            while ($row = $res->fetch_assoc()) {
                echo " page = " . $row['name'] . "\n";
            }

            if($is_new_page){
                echo "New Page <br/>";
            }
            ?>

        </div>
        <button id="new_page" class="buttons" type="submit" name="new">New Page</button>

    </div>

    <div id="main">
        <?php include 'header.php'; ?>
        <div id="content">
        <?php
        if($is_new_page){
            require('C:\xampp/htdocs/Semester4_Project/admin/settings.php');
        }
        ?>
        </div>

    </div>
    <div id="header">

    </div>
</div>

</body>
</html>

