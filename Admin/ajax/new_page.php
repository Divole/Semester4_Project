<?php
require('C:/xampp/htdocs/Semester4_Project/admin/database_con.php');
if(isset($_POST['new_name'])){
    global $mysqli;
    $mysqli->query("INSERT INTO pages (name) VALUES ('".$_POST['new_name']."')");
    $id = '';
    $res = $mysqli->query("SELECT * from pages order by id desc limit 1");
    while ($row = $res->fetch_assoc()){
        $id = $row['id'];
        $name = $row['name'];
    }
    $unique_name = $name.'_'.$id;
    $stmt = $mysqli->prepare('UPDATE pages SET name = ? WHERE id = ?');
    $stmt->bind_param('ss',$unique_name,$id);
    $stmt->execute();
    $stmt->close();

    $json = array(
        'unique'=>$unique_name
    );
    echo json_encode($json);
//    echo "data: {id: ".$id."}";
//    echo $id;
}