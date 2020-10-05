<?php
if (!session_id()) session_start();
// app version
$ver = "1.2.4";
?>

    <!DOCTYPE html>
    <html lang="en-us">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/img/myya_logo.jpg" type="image/png">
        <title>WELCOME TO MYYA</title>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/owlcarousel/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/owlcarousel/owlcarousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/owlcarousel/css/docs.theme.min.css">
        <link rel="stylesheet" href="assets/css/main.css?ver=<?=$ver?>">

        <link rel="stylesheet" href="assets/css/style.css?ver=<?=$ver?>">
        <link rel="stylesheet" href="assets/css/properties.css?ver=<?=$ver?>">
        <link rel="stylesheet" href="assets/css/c_and_m.css?ver=<?=$ver?>">
        <link rel="stylesheet" href="assets/css/document.css?ver=<?=$ver?>">
        <link rel="stylesheet" href="assets/css/learning.css?ver=<?=$ver?>">
        <link rel="stylesheet" href="assets/css/css/publishing.css?ver=<?=$ver?>">
        <link rel="stylesheet" href="assets/css/what.css?ver=<?=$ver?>">
        <link rel="stylesheet" href="assets/css/allpages.css?ver=<?=$ver?>">
        <link href="assets/css/style2.css?ver=<?=$ver?>" rel="stylesheet" />
        <link href="assets/css/image-puzzle.css?ver=<?=$ver?>" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Josefin+Slab:400,600" rel="stylesheet">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
          <link rel="stylesheet" type="text/css" href="assets/css/css/lightbox.min.css">

        <link rel="stylesheet" href="assets/css/mod.css">

        <script src="assets/js/jquery-2.1.1.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
         <script src="assets/js/lightbox.min.js"></script>
        <style>
        .dropdown-menu a{
            display: block;
            padding: 5px;
            color: orange;
        }
        </style>
    </head>

    <body>
        <header>
            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                        <!--                <a href="index.php" class="navbar-brand"><img class=" logo" src="assets/img/myya_logo.jpg" width="" height="" alt=""></a>-->
                        <a href="index.php" class="navbar-brand">MYYA</a>
                    </div>
                    <div class="navbar-left">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/games.php">Learning</a></li>
                                <li><a href="#" data-target="#soon-modal" data-toggle="modal">Publishing</a></li>
                                <!--                        <li><a href="">Care</a></li>-->
                                <li><a href="#" data-target="#soon-modal" data-toggle="modal">Store</a></li>
                                <!--                        <li><a href="">Giving</a></li>-->
                                <!-- <li><a href="/new_what.php">What's up</a></li> -->
                             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         What's up
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/new_what.php" >About Us</a>
          <a class="dropdown-item" href="/gallery.php">Gallery</a>
        </div>
      </li>
                                <li><a href="#" data-target="#soon-modal" data-toggle="modal">Properties</a></li>
                                <li><a href="#" data-target="#soon-modal" data-toggle="modal">Food</a></li>
                                <li><a href="#" data-target="#soon-modal" data-toggle="modal">Cleaning</a></li>
                                <li><a href="#" data-target="#soon-modal" data-toggle="modal">Document</a></li>
                                <li><a href="#" data-target="#soon-modal" data-toggle="modal">Farm</a></li>
                                <li><a href="/gallery.php">Gallery</a></li>
                                <?php
                                if (isset($_SESSION['login'])){
                                    print<<<here
                                    <li class="acc"><a href="assets/includes/logout.php">LOG OUT</a></li>
                                    <li class="acc"><a href="#">Welcome, {$_SESSION['login'][0]}</a></li>
here;
                                } else {
                                    print<<<here
                                        <li class="acc"><a href="#" data-target="#signUpModal" data-toggle="modal">SIGN UP</a></li>
                                        <li class="acc"><a href="#" data-target="#loginModal" data-toggle="modal">LOG IN</a></li>
here;
                                }
                                ?>
                                <!--
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </a>
                                </li>
-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
