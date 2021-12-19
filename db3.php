<?php

$dbhost = "localhost";

$dbname = "skvorus1_video";

$username = "skvorus1";

$password = "skvorushka1965";



$db = mysqli_connect($dbhost, $username, $password, $dbname);



if($db == false)

{

    echo "Ошибка подключения";

}



function get_singles_all(){

    global $db;

$singles = $db->query("SELECT * FROM  singles");

return $singles;

}



function get_single_by_id($id){

    global $db;

$singles = $db->query("SELECT * FROM singles WHERE id = $id");

foreach ($singles as $single){

    return $single;

}

}



function get_posts($limit, $offset)

{

    global $db;

    $res = $db->query("SELECT * FROM singles ORDER BY id DESC LIMIT $limit OFFSET $offset");

    $posts = mysqli_fetch_all($res, MYSQLI_ASSOC);

    return $posts;

}

?>



