<?php
require_once('C:/xampp/htdocs/Semester4_Project/admin/database_con.php');

if(isset($_POST['code']) && isset($_POST['update_name'])){
    $pg_name = $_POST['update_name'];
    $pg_settings = $_POST['code'];
    $stmt = $mysqli->prepare('UPDATE pages SET setting = ? WHERE name= ?');
    $stmt->bind_param('ss',$pg_settings,$pg_name);
    $stmt->execute();
    $stmt->close();
    echo "data: {\" OK \"}";
}

