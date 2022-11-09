<?php
//    session_start();
//    if(!isset($_SESSION['login'])){
//        echo "<script>
//                alert('Akses ditolak, silahkan login dulu');
//                document.location.href = 'login.php';
//            </script>";
//    }else{
//        $username = $_SESSION['login'];
//    }

   require 'config.php';

   if(isset($_POST['submit'])){
       $name_house = $_POST['name_house'];
       $loc_house = $_POST['loc_house'];
       $region_house = $_POST['region_house'];
       $words_house = $_POST['words_house'];

       $pict_house  = $_FILES['pict_house']['name'];
       $x = explode('.',$pict_house);
       $ekstensi = strtolower(end($x));
       $pict_house_baru = "$name_house.$ekstensi";
       
       $tmp = $_FILES['pict_house']['tmp_name'];
       
       if(move_uploaded_file($tmp, "pic_house/".$pict_house_baru)){

       $result = mysqli_query($db, 
       "INSERT INTO house (name_house, loc_house, region_house, words_house, pict_house) 
       VALUES ('$name_house', '$loc_house', '$region_house', '$words_house', '$pict_house_baru')");

       if($result){
        echo "
            <script>
               alert('Data berhasil di kirim');
            </script>
            ";
       }
       else{
        echo "
            <script>
               alert('Data gagal di kirim');
            </script>
            ";
       }

   }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOT | Form House | Admin</title>
    <link rel="stylesheet" href="css/form_house.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
<header class="wraper">   
            <img class="logo" src="css/pictures/gotlogo.png" alt="logo GOT" height="100px">
            <div>
                <ul class="nav_links">
                    <li><a title="Home" href="admin_page.php">Home Admin</a></li>
                    <li><a title="Clan Form Page" href="form_house.php">Clan Form GOT</a></li>
                    <li><a title="Character Form Page" href="form_char.php">Character Form GOT</a></li>
                    <li><a title="Contact Form Us" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <a href="logout.php"><button class="contact">Logout</button></a>
    </header>

    <main> 
        <div id="#" class="sec-content-form">
            <h2>Add House</h2>
            <form action="" method="post" enctype="multipart/form-data"> 
            <!-- form field di sini -->
            <table>
                    <div class="formgrup1">
                        <label>Name House:</label>
                        <input type="text" name="name_house" placeholder="name house..." />
                    </div>
                    <div class="formgrup1">
                        <label>Location House:</label>
                        <input type="text" name="loc_house" placeholder="location house ..." />
                    </div>
                    <div class="formgrup3">
                        <label>Choose Region House:</label>
                            <select name="region_house" placeholder="select Region...">
                                <option>select Region...</option>
                                <option value="Crownlands">Crownlands</option>
                                <option value="Stormlands">Stormlands</option>
                                <option value="Iron Islands">Iron Islands</option>
                                <option value="North">North</option>
                                <option value="Westerlands">Westerlands</option>
                                <option value="Reach">Reach</option>
                                <option value="Vale of Arryn">Vale of Arryn</option>
                                <option value="Riverlands">Riverlands</option>
                                <option value="Dorne">Dorne</option>
                                <option value="Unknown">Unknown</option>
                            </select> 
                    </div>
                    <div class="formgrup2">
                        <label>About House : </label>
                        <textarea name="words_house" placeholder="  About House..."></textarea><br> 
                    </div>
                    <div class="formgrup1">
                        <label for="">Upload pic House : </label>
                        <input type="file" name = "pict_house"><br><br>
                    </div>
                    <div class="formgrup">
                        <br>
                        <input type="submit" name="submit" class="submit" value="Send Now" />
                    </div> 
        
            </table>
            </form>
        </div>
</main>

        <div class="footer">
        <ul class="footer-me">
            <ul class="footer-logo">
                <div align="center" class="image"><img src="css/pictures/gotlogo.png" alt="AimerLogo" height="90px"></div>
                <div class="footer-owner"> © 2022 Game of Thrones FANDOM</div>
            </ul>
            <ul class="footer-me1">
                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i>   Instagram</a></li>
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i>   Facebook</a></li>
                <li><a href="#" title="youtube"><i class="fa fa-youtube"></i>   YouTube</a></li>
    </div>
    <div class="footer-copyright">
        Copyright &copy; 2022 Designed by Kelompok PA WEB. All rights reserved. Game of Thrones | FANDOM Community.
    </div>
</body>
</html>
