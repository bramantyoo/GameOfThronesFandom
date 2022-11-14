<!--********************************
Game Of Thrones Fandom Final Project
***********************************-->
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

  <!--CONTAINER-->
  <div class="container">
    <div class="section2 sections" id="about">
      <section>
        <img src="asset/image/ironthronecrop2.png">
      </section>
      <section>
        <em>Prologue</em>
        <h1 class="title">ABOUT GAME OF THRONES</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </section>
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
