<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "gotfandom";

$db = new mysqli($server, $username, $password, $db_name);

if(!$db){
    die("Gagal Terhubung : ".$db->connect_error);
}

?>