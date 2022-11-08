<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
    <link rel="stylesheet" href="css/contact.css">
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
    <div class="container">
        <div class="main-content">
            <h2>List User Comments</h2>
        </div>
        <div class="nav_search">
                <form class="cari" action="" method="get">
                    <label for="search"></label>
                    <input class="cari1" type="text" name="search" placeholder="Search...">
                </form> 
           </div>
        <div class="content">
            <div class="main-content">
                <table class="tabel"  cellpadding="15">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email user</th>
                        <th>Comments user</th>
                        <th>Date Comments</th>
                    </tr>
                    <?php
                        $i = 1;

                        require 'config.php';
                        $result = mysqli_query($db, "SELECT * FROM contact");
                     
                     
                        if (isset($_GET['search'])){
                         $result = mysqli_query($db, "SELECT * FROM contact WHERE opini LIKE '%".
                             $_GET['search']."%'");
                        }
                     
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr class=data>
                        <td><?=$i;?></td>
                        <!-- <td>no</td> -->
                        <td><?=$row['username']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['opini']?></td>
                        <td><?=$row['tanggal_contact']?></td>
                        
                    </tr>
                    
                        <?php
                        $i++;
                            }
                        ?>
                </table>
            </div>
        </div>
        </main>
    </div>
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
    <script src="main.js"></script>
</body>
</html>
