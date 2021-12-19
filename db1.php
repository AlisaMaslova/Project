<?php

$dbhost = "localhost";

$dbname = "334667db2";

$username = "334667";

$password = "skvorushka1965";



$i_title=1;  $i_text=2;  $i_img=3; $i_date=4; $i_views=5; $i_comments=6;




$db = mysqli_connect($dbhost, $username, $password, $dbname);



if($db == false)

{

    echo "Ошибка подключения";

}




/*
$dbPDO = new PDO('mysql:host=localhost;dbname=news', $username, $password);

$db =  mysqli_connect($dbhost, $username, $password, $dbname);

*/

$res = $db->query("SELECT count(title) FROM singles");

function get_singles_all(){

    global $db;

$singles = $db->query("SELECT * FROM singles");

return $singles;

}





function get_single_by_id($id){

    global $db;

$singles = $db->query("SELECT * FROM singles WHERE id = $id");

return mysqli_fetch_row($singles);

}



function views_update($id){

    global $db;

    $db->query("UPDATE singles SET views = views + 1 WHERE id = $id");

}



function get_posts($limit, $offset)

{

    global $db;

    $res = $db->query("SELECT * FROM singles ORDER BY id DESC LIMIT $limit OFFSET $offset");

    $posts = mysqli_fetch_all($res, MYSQLI_ASSOC);

    return $posts;

}



?>



