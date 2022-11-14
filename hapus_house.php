<?php 

require 'config.php';

if(isset($_GET['id_house'])){
    $id_house = $_GET['id_house'];

    $result = mysqli_query($db, 
        "DELETE FROM house WHERE id_house='$id_house'");

    if($result){
        header("Location:admin_page.php");
    }
}