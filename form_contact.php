<?php

   require 'config.php';

   if(isset($_POST['submit'])){
       $nama = $_POST['username'];
       $email = $_POST['email'];
       $opini = $_POST['opini'];
       $tanggal_contact = $_POST['tanggal_contact'];
       {

       $result = mysqli_query($db, 
       "INSERT INTO contact (username, email, opini, tanggal_contact) 
       VALUES ('$nama', '$email', '$opini', '$tanggal_contact')");

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
    <!-- ini halaman user-form-contact -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOT | Form Contact | User</title>
    <link rel="stylesheet" href="css/form_contact.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
    <header class="wraper">   
            <img class="logo" src="css/pictures/gotlogo.png" alt="logo GOT" height="100px">
            <div>
                <ul class="nav_links">
                    <li><a title="Home" href="user_page.php">Page User</a></li>
                </ul>
            </div>
    </header>

    <main> 
        <div id="#" class="sec-content-form">
            <h2>Contact Us</h2>
            <form action="" method="post" enctype="multipart/form-data"> 
            <!-- form field di sini -->
            <table>
                    <div class="formgrup1">
                        <label>Username:</label>
                        <input type="text" name="username" placeholder="Username..." />
                    </div>
                    <div class="formgrup1">
                        <label>Email:</label>
                        <input type="email" name="email" placeholder="Email User..." />
                    </div>
                    <div class="formgrup2">
                        <label>Message</label>
                        <textarea name="opini" placeholder="  Your Message..."></textarea><br> 
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