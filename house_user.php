<!--********************************
Game Of Thrones Fandom Final Project
***********************************-->

<?php 
    require 'config.php';

    $result1 = mysqli_query($db, "SELECT * FROM karakter");
    $result2 = mysqli_query($db, "SELECT * FROM house");
    $res3 = "SELECT c.*,p.* FROM karakter c, house p WHERE c.id_house = p.id_house";
    $result3 = mysqli_query($db,$res3);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!--TITLE-->
  <title>Home</title>

  <!--SHORTCUT ICON-->
  <link rel="shortcut icon" href="images/gotlogo.ico" />

  <!--META TAGS-->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--GOOGLE FONTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">

  <!-- STYLESHEET -->
  <link rel="stylesheet" href="css/user_page.css">

</head>

<body>

  <!--TOP NAVIGATION-->
  <header id="header">
    <div class="topnav" id="myTopnav">
      <a href="#"><img class="logo animate" src="images/logoheader.png" alt=""></a>
      <a href="user_page.php">Home</a>
      <a href="char_user.php">Character</a>
      <a href="house_user.php">House</a>
      <a href="">About</a>
      <a href="#form" class="btn2" style="float:right;"><i class="fa fa-handshake-o"></i> Logout</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
    </div>
  </header>
  <div class="header">

    <!--BANNER-->
    <div class="banner">
      <section>
        <img src="asset/image/gotlogo.png" alt="">
        <!-- <h1 class="title">GAME OF THRONES FANDOM</h1> -->
        <h4 class="sub-title">Unofficial Fandom site of Game of Thrones. </h4>
        <!-- background music -->
        <center>
          <audio autoplay loop controls volume="0.5">
            <source src="music/Ramin_Djawadi_-_A_Song_of_Ice_and_Fire.mp3" type="audio/mp3" />
          </audio>
        </center>
        <!-- end background music -->
      </section>
    </div>
  </div>

  <!--  -->
  <div class="products-area-wrapper gridView">
    <div class="products-header">
      <div class="product-cell image">
        House Name
        <button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button>
      </div>
      <div class="product-cell category">ID<button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
      <div class="product-cell status-cell">Status<button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
      <div class="product-cell sales">Region<button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
      <div class="product-cell stock">Location<button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
      <div class="product-cell price">Words<button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
    </div>
    <?php 
          $i = 1;
          while($row = mysqli_fetch_array($result2)){
      ?>
    <div class="products-row">
      <button class="cell-more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
          <circle cx="12" cy="12" r="1" />
          <circle cx="12" cy="5" r="1" />
          <circle cx="12" cy="19" r="1" />
        </svg>
      </button>
      <div class="product-cell image">
        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="product">
        <span><?=$row['name_house']?></span>
      </div>
      <div class="product-cell category"><span class="cell-label">ID:</span><?=$row['id_house']?></div>
      <div class="product-cell sales"><span class="cell-label">Region:</span><?=$row['region_house']?></div>
      <div class="product-cell stock"><span class="cell-label">Location:</span><?=$row['loc_house']?></div>
      <div class="product-cell price"><span class="cell-label">Words:</span><?=$row['words_house']?></div>
    </div>
    <?php
          $i++; 
          }
      ?>
  </div>
  </div>

  <!--FOOTER-->
  <footer>
    <div class="footer">
      <div class="row">
        <a href="instagram.com/an_atra22"><i class="fa fa-instagram"></i></a>
        <a href="instagram.com/adlnshafa"><i class="fa fa-instagram"></i></a>
        <a href="instagram.com/bramantyoardi_"><i class="fa fa-instagram"></i></a>
      </div>

      <div class="row">
        <ul>
          <li><a href="user_page.php">Home</a></li>
          <li><a href="char_user.php">Character</a></li>
          <li><a href="house_char.php">House</a></li>
          <li><a href="form_contact.php">Feedback for us</a></li>
        </ul>
      </div>

      <div class="row">
        Copyright © 2022 Group 2 (Web Programming) - All rights reserved
      </div>
    </div>
  </footer>

  <!--ADDITIONAL-->
  <a href="#" id="roll_back" class="animate"><i class="fa fa-angle-up"></i></a>

  <!-- JAVASCRIPT -->
  <script type="text/javascript" src="js/user_page.js"></script>
</body>
</html>
