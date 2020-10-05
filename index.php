<?php
require_once "assets/includes/nav.php";

if (isset($_GET['attention'])) print <<<here
    <script>
    $(function() {
        alert("{$_GET['attention']}");
        setTimeout(function() {
            $('#loginModal').modal('toggle');
        }, 100);
    });
    </script>
here;

?>

    <div id="artCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#artCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#artCarousel" data-slide-to="1"></li>
            <li data-target="#artCarousel" data-slide-to="2"></li>
            <li data-target="#artCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active img-height">
                <img class="opaque" src="assets/img/gallery/gallery_17.jpg" alt="">
                <div class="carousel-caption">
                    <h3 class="move-up"><span class="bigger-font">Welcome to MYYA</span>
                        <br>
                        <span class="learn-color">A platform to learn and Grow</span></h3>
                    <button class="btn btn-success btn-lg">EXPLORE</button>
                </div>
            </div>
            <div class="item img-height">
                <img class="opaque" src="assets/img/gallery/gallery_27.jpg" alt="">
                <div class="carousel-caption">
                    <h3 class="move-up">
                        <span class="bigger-font">MYYA PUBLISHING</span><br>
                        <span class="publish-color">Seeking and knowing God in this Digital age</span></h3>
                    <button class="btn btn-warning btn-lg" id-="learn">LEARN MORE</button>
                </div>
            </div>
            <div class="item img-height">
                <img class="opaque" src="assets/img/gallery/gallery_37.jpg" alt="">
                <div class="carousel-caption">
                    <h3 class="move-up">
                        <span class="bigger-font">MYYA CARE</span><br>
                        <span class="care-color">We meet your needs at MYYA</span>
                    </h3>
                    <button class="btn btn-danger btn-lg">CONNECT WITH US</button>
                </div>
            </div>
            <div class="item img-height">
                <img class="opaque" src="assets/img/gallery/gallery_47.jpg" alt="">
                <div class="carousel-caption">
                    <h3 class="move-up">
                        <span class="bigger-font">MYYA GIVING</span><br>
                        <span class="give-color">Donating to the less priviledged</span>
                    </h3>
                    <button class="btn btn-success btn-lg">JOIN THE COMMUNITY</button>
                </div>
            </div>
            <a href="#artCarousel" class="left carousel-control" data-slide="prev" style="font-size:40px;"><span>&lsaquo;</span></a>
            <a href="#artCarousel" class="right carousel-control" data-slide="next" style="font-size:40px;"><span>&rsaquo;</span></a>
        </div>

    </div>

    <h3 class="getting-started center change-image">EXPLORE MYYA</h3>
    <div class="alert alert-info container" style="background-color: orange ">
        <p>Note: You have to be authenticated before playing the card game. <a href="/games.php" style="color: #000">click here to get started</a></p>
    </div>
    <section class="the-grids">
        <a href="/games.php">
            <div class="game-div">
                <div class="game-description">
                    <h4 class="services text-center orange"><br/>PLAY <br/>MaCard Games</h4>
                </div>
            </div>
        </a>
        <div class="other-infos">
            <div class="owl-carousel owl-theme">
                <!--
           <a href="new_learning.php">
                <div class="item item-description">
                    <h4 class="myya-list">MYYA Learning</h4>
                    <h5 class="more-info">We help you Learn and grow...</h5>
                    <div class="myya-image-list image-1">

                    </div>
                </div>
            </a>
-->
                <a href="about.php">
                    <div class="item item-description">
                        <h4 class="myya-list">MYYA Publishing</h4>
                        <h5 class="more-info">Knowing God more digitally...</h5>
                        <div class="myya-image-list image-2">
                        </div>
                    </div>
                </a>
                <a href="about.php">
                    <div class="item item-description">
                        <h4 class="myya-list">MaCards Books</h4>
                        <div class="myya-image-list image-7">
                            <!-- <img class="maya-image" src="assets/img/myya_doc.jpg" alt=""> -->
                        </div>
                    </div>
                </a>
                <a href="about.php">
                    <div class="item item-description">
                        <h4 class="myya-list">MYYA Store</h4>
                        <h5 class="more-info">Buy From us...</h5>
                        <div class="myya-image-list image-4">

                        </div>
                    </div>
                </a>
                <a href="about.php">
                    <div class="item item-description">
                        <h4 class="myya-list">MaCards Electronic Copies</h4>
                        <div class="myya-image-list image-6">

                        </div>
                    </div>
                </a>
                <!--
            <a href="c_and_m.php">
                <div class="item item-description">
                    <h4 class="myya-list">Cleaning and Maintenance</h4>
                    <div class="myya-image-list image-6">

                    </div>
                </div>
            </a>
-->
                <a href="about.php">
                    <div class="item item-description">
                        <h4 class="myya-list">MaCards</h4>
                        <h5 class="more-info">Buy Macards from us...</h5>
                        <div class="myya-image-list image-7">
                            <!-- <img class="maya-image" src="assets/img/myya_doc.jpg" alt=""> -->
                        </div>
                    </div>
                </a>
                <a href="about.php">
                    <div class="item item-description">
                        <h4 class="myya-list">Properties</h4>
                        <h5 class="more-info">Buy and sell Properties...</h5>
                        <div class="myya-image-list image-8">
                            <!-- <img class="maya-image" src="assets/img/maya_estate.jpg" alt=""> -->
                        </div>
                    </div>
                </a>
                <a href="new_what.php">
                    <div class="item item-description">
                        <h4 class="myya-list">What's Up</h4>
                        <h5 class="more-info">Let's know what's up...</h5>
                        <div class="myya-image-list image-9">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!--

<section class="admin-info">
   <h3 class="admin-header">OUR MISSION</h3>
    <div class="admin-image">
        <div class="admin-overlay"></div>
    </div>
    <div class="admin-texts">
        <div class="all-texts"><div class="rounded">1</div>Lorem ipsum dolor sit amet</div>
        <div class="all-texts"><div class="rounded">2</div>Lorem ipsum dolor sit amet</div>
        <div class="all-texts"><div class="rounded">3</div>Lorem ipsum dolor sit amet</div>
        <div class="all-texts"><div class="rounded">4</div>Lorem ipsum dolor sit amet</div>
        <div class="all-texts"><div class="rounded">5</div>Lorem ipsum dolor sit amet</div>
        <div class="link-more"><a href="#">READ MORE</a></div>
    </div>
</section>

<section class="our-team">
    <div class="ot-overlay">
       <h3 class="ot-text">MEET OUR TEAM</h3>
        <div class="person person1">
           <div class="per-img1"></div>
            <p>Name : OgheneMavrodi Amos</p>
            <p>Age : 30</p>
            <p>Position : CEO</p>
        </div>
        <div class="person person2">
           <div class="per-img2"></div>
            <p>Name : Clara Clarke</p>
            <p>Age : 30</p>
            <p>Position : PRO</p>
        </div>
        <div class="person person3">
           <div class="per-img3"></div>
            <p>Name : Muslera Musloro</p>
            <p>Age : 30</p>
            <p>Position : CFO</p>
        </div>
    </div>
</section>
-->

    <!--<section class="partners">
   <h3 class="part-text">OUR PARTNERS</h3>
   <div class="shift-left">
        <div class="partner">Partner 1</div>
        <div class="partner">Partner 2</div>
        <div class="partner">Partner 3</div>
        <div class="partner">Partner 4</div>
   </div>
</section>-->
    <!--
<section class="contact-us">
    <h3>Contact us</h3>
    <form action="" class="contact-form">
        <div class="right-part">
            <input type="text" placeholder="Title"/>
            <input type="email" placeholder="Your Name">
            <input type="text" placeholder="Your Email">
        </div>
        <div class="left-part">
            <textarea name="" id="" cols="30" rows="10">Type Message Here</textarea>
        </div>
        <div class="contact-button">
            <button class="contact-btn">Send Message</button>
        </div>
    </form>
</section>
-->

    <?php

    require_once "assets/includes/footer.php";
