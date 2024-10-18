<?php
$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "db_warga";

$connection = mysqli_connect($hostname, $user, $password, $db_name);

// var_dump($connection)


function myquery($query){
    global $connection;
    $res = mysqli_query($connection, $query);
    $returns = [];
    while($data = mysqli_fetch_assoc($res)){
        $returns[] = $data;
    }
    return $returns;
}

?>