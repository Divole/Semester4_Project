<?php
require_once('C:/xampp/htdocs/Semester4_Project/admin/database_con.php');

if(isset($_POST['save_name'])&& isset($_POST['old_name'])){
    $save_name = $_POST['save_name'];
    $old_name = $_POST['old_name'];
    $stmt = $mysqli->prepare('UPDATE pages SET name = ? WHERE name= ?');
    $stmt->bind_param('ss',$save_name,$old_name);
    $stmt->execute();
    $stmt->close();

    $json = array(
        'name'=>'updated'
    );
    echo json_encode($json);

}