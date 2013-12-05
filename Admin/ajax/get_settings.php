<?php
require_once('C:/xampp/htdocs/Semester4_Project/admin/database_con.php');
if(isset($_POST['settings_for_name'])) {
    $name = $_POST['settings_for_name'];
    $json = array();
    $s = $mysqli->prepare("SELECT name, setting FROM pages WHERE name = ?");
    $s->bind_param("s", $name);
    $s->execute();
    $s->bind_result($name,$settings);
    if($s->fetch()){
        $json['name'] = $name;
        $json['pg_settings'] = $settings;
    }
    $s->close();

    echo json_encode($json);
}