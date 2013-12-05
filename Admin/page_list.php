<?php
//require('Page.php');
require('C:/xampp/htdocs/Semester4_Project/admin/database_con.php');

function makeBtn($name){
    if (strpos($name,'New Page') !== false) {
        echo "<button class='page_btn' id='btn_".$name."' onclick='showPage(\"".$name."\")'>New Page</button><br/>";
    }else{
        echo "<button class='page_btn' id='btn_".$name."' onclick='showPage(\"".$name."\")'>".$name."</button><br/>";
    }
}

//$arr_pages = array();
create_pages();

function create_pages(){
    global $mysqli;
    $res = $mysqli->query("SELECT name FROM pages");
    $res->data_seek(0);
    while ($row = $res->fetch_assoc()){
//        $id = $row['id'];
        $name = $row['name'];
//        $settings = $row['setting'];
//        makePage($id,$name,$settings);
        makeBtn($name);
    }

}
//function makePage($id,$name,$settings){
//    global $arr_pages;
//    $page = new Page($id,$name,$settings);
//    $arr_pages[$name] = $page;
//}
//function getPageByName($name){
//    global $arr_pages;
//    return $arr_pages[$name];
//}

//function getPageID($name){
//    global $arr_pages;
//    $page = $arr_pages[$name];
//    $id = $page->getID();
//    return $id;
//}

//function check_page_names(){
//    global $arr_pages;
//    $exist = 0;
//    foreach($arr_pages as $key => $val){
//        if(strpos($key, "New Page-")){
//            $pieces = explode("-", $key);
//            $num = $pieces[1];
//            if($num > $exist){
//               $exist = $num;
//            }
//        }else{
//            return $exist;
//        }
//
//    }
//    return $exist+1;
//}

function printArray(){
   global $arr_pages;
    foreach($arr_pages as $val){
        echo $val->__toString();
    }
}


