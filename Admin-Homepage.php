<?php

include("session.php");
include("db-connect.php");


?>
<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width  initial-scale= 1.0">
      <link rel="stylesheet" href="style.css">
      <link href='https://css.gg/user.css' rel='stylesheet'>
      <link href='https://css.gg/close.css' rel='stylesheet'>
      <link href='https://css.gg/menu.css' rel='stylesheet'>
      <link href='https://css.gg/search.css' rel='stylesheet'>
      <link href='https://css.gg/log-off.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <title> RUH-tainment </title>
    </head>

    <body>
        <section class="header">
            <nav>
                <a href="Admin-Homepage.php"> <img src="images/logo.png"> </a>
                <div class="nav-links" id="navLinks">
                    <i class="gg-close fa"  onclick="hideBurger()"></i>
                    <ul>
                        <li> <a href="Admin-Homepage.php"> HOME </a></li>
                        <li> <a href="Admin-Page.php"> PLACES <br></a></li>
                        <li style="position:absolute;"> <a href="Logout.php" > <i class="gg-log-off"></i></a> </li> 
                    </ul>
                </div>
                <i class="gg-menu fa" id="gg-menu" onclick="showBurger()"></i>
            </nav>

            <div class="text-box">
                <h1> VISIT RIYADH <br> <br> </h1>
                <P> <br> <br></P>
                    <div class="search-box">
                      <input class="search-txt" type="text" name="" id="srch"  placeholder="Type to search">
                      <button class="search-btn" onclick="search()" style="border: none;"> <i class="gg-search"></i></button>
                    </div>
            </div>

        </section>

        <section class="places">
            <a href="Admin-Page.php"> <h1> View More Entertainment Places </h1> </a>
            <!-- <p> </p> -->

            <div class="row">
                <div class="places-col p1">
                    <img src="imagesruh/Bobs.jpeg">
                    <div class="layer">
                        <h3> BOB'S </h3>
                    </div>
                </div>

                <div class="places-col p2">
                    <img src="imagesruh/crystal.jpeg">
                    <div class="layer">
                        <h3> Crystal Maze </h3>
                    </div>
                </div>

                <div class="places-col p3">
                    <img src="imagesruh/mueseum-.webp">
                    <div class="layer">
                        <h3> Museum Of Illusions </h3>
                    </div>
                </div>

            </div>
        </section>


        <section class="places">
            <a href="Admin-Page.php"> <h1> Featured Now </h1> </a>
            <p> Time is running, Don't miss out on the fun! </p> 

            <div class="row">
                <div class="places-col last-chance">
                    <img src="imagesruh/Escapero.jpeg">
                    <div class="layer">
                        <h3> Escape The Room </h3>
                    </div>
                </div>

                <div class="places-col last-chance">
                    <img src="imagesruh/firstaiment-.jpeg">
                    <div class="layer">
                        <h3> Firstainment</h3>
                    </div>
                </div>

                <div class="places-col last-chance">
                    <img src="imagesruh/padelRush.jpeg">
                    <div class="layer">
                        <h3> Padel Rush </h3>
                    </div>
                </div>

            </div>
        </section>

        
        <section class="reviews">
            <a href="reviewss-Admin.php"><h1>Reviews</h1> </a>
            

            <div class="row">
                <div class="reviews-col">
                    <img src="Images/user1.png">
                    <div>
                        <p> We tried almost all the rides except the one that will hang you upside down ! the horror house is the best and funniest , we enjoyed  and are definitely gonna visit again! </p>
                       <h3>Ahmed</h3>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                    </div>
                </div>

                <div class="reviews-col">
                    <img src="Images/user1.png">
                    <div>
                        <p> Rides were so busy and it takes forever to get on any game here! there is no enough chairs/tables for when you would like to rest a little.</p>
                        <h3>Faisal</h3>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                    </div>
                </div>

            </div>
        </section>

        <!-- MENU TOGGLE -->
       

         <hr style="width:50%; margin-left:25% !important; margin-right:25% !important;">
        <footer class="stickyfooter"> Copyright 2022 - RUH-tainment ALL Rights Reserved </footer>

        <script>

            var navLinks = document.getElementById("navLinks");

            function search() {
                 url = 'Admin-Page.php?sort='+document.getElementById("srch").value;
                 window.open(url);
            }

            function hideBurger() {
                navLinks.style.right="-300px";
               
            }
            function showBurger() {
                navLinks.style.right="0";
               
            }
        </script>

    </body>
</html>
