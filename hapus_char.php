<?php 

require 'config.php';

if(isset($_GET['id_char'])){
    $id_char = $_GET['id_char'];

    $result = mysqli_query($db, 
        "DELETE FROM karakter WHERE id_char='$id_char'");

    if($result){
        header("Location:char_admin.php");
    }
}