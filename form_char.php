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
       $name_char = $_POST['name_char'];
       $id_house = $_POST['id_house'];
       $title_char = $_POST['title_char'];
       $caption_char = $_POST['caption_char'];

       $pict_char  = $_FILES['pict_char']['name'];
       $x = explode('.',$pict_char);
       $ekstensi = strtolower(end($x));
       $pict_char_baru = "$name_char.$ekstensi";
       
       $tmp = $_FILES['pict_char']['tmp_name'];
       
       if(move_uploaded_file($tmp, "pic_char/".$pict_char_baru)){

       $result = mysqli_query($db, 
       "INSERT INTO karakter (name_char, id_house, title_char, caption_char, pict_char) 
       VALUES ('$$name_char', '$id_house', '$title_char', '$caption_char', '$pict_char_baru')");

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
    <link rel="stylesheet" href="css/form_char.css">
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
            <h2>Add Character</h2>
            <form action="" method="post" enctype="multipart/form-data"> 
            <!-- form field di sini -->
            <table>
                    <div class="formgrup1">
                        <label>Name Character :</label>
                        <input type="text" name="name_char" placeholder="text here..." />
                    </div>
                    <div class="formgrup1">
                        <label>Nama House :</label>
                        <input type="text" name="id_house" placeholder="text here..." />
                    </div>
                    <div class="formgrup1">
                        <label>Title Character :</label>
                        <input type="text" name="title_char" placeholder="text here..." />
                    </div>
                    <div class="formgrup2">
                        <label>About Character : </label>
                        <textarea name="caption_char" placeholder="  About Character..."></textarea><br> 
                    </div>
                    <div class="formgrup1">
                        <label for="">Upload pic Character : </label>
                        <input type="file" name = "pict_char"><br><br>
                    </div>
                    <div class="formgrup">
                        <br>
                        <input type="hidden" name="tanggal_contact" value=<?=date("d-m-Y")?>>
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
