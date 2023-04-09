<?php   include("path.php"); 
        include(ROOT_PATH . "/database/db.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Links all css formatting -->
    <link href="css/all.css" rel="stylesheet"> <!-- Font Awsome -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/service.css" rel="stylesheet" type="text/css">
    <link href="css/slideshow.css" rel="stylesheet" type="text/css">
    <meta name="author" content="Jawad Kadri">
    <meta name="description" content="template">
    <title>Service Showcase</title>
</head>

<body onload="startTime()">

    <!-- Header -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>

    <!-- Banner -->
    <div class="banner">
        <img class="serviceBanner" src="images/service/womenNextToServer.jpg" alt="Women Standing Next To Server">
    </div>

    <div class="serviceMsg">
        <p class="serviceMsgText">Creating powerful networks in the new age!</p>
        <p class="serviceMsgText2">I'm meant to be writing at this moment. What I mean is, I'm meant to be writing something else at this moment. The document I'm meant to be writing is, of course, open in another program on my computer and is patiently awaiting my attention. Yet here I am plonking down senseless sentiments in this paragraph because it's easier to do than to work on anything particularly meaningful. I am grateful for the distraction.</p>
    </div>

    <div class="gradientBack">
        <p class="serviceMsgText" style="margin-bottom: 1px; margin-right: 1%;">What is ONG?</p>
        <p class="serviceMsgText3" style="margin-left: 29%;">It's power. It's enduring. It's how we are committed to persue technological advancements in the networking world.</p>
        
        <div class="whiteCard">
            <p class="cardTitle">Pushing to the future</p>
            <p class="cardMsg">There was no time. He ran out of the door without half the stuff he needed for work, but it didn't matter. He was late and if he didn't make this meeting on time, someone's life may be in danger.</p>
        </div>

        <div class="whiteCard">
            <p class=" cardTitle"> Re-Creating Technology</p>
            <p class="cardMsg">Sometimes there isn't a good answer. No matter how you try to rationalize the outcome, it doesn't make sense. And instead of an answer, you are simply left with a question. Why?</p>
        </div>

        <div class="whiteCard">
            <p class="cardTitle">Deliver Results</p>
            <p class="cardMsg">Sometimes it just doesn't make sense. The man walking down the street in a banana suit. The llama standing in the middle of the road. The fairies dancing in front of the car window. The fact that all of this was actually happening and wasn't a dream.</p>
        </div>

    </div>

        <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1/3</div>
        <img src="images/service/serviceSS1.jpg" style="width:100%">
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">2/3</div>
        <img src="images/service/serviceSS2.jpg" style="width:100%">
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">3/3</div>
        <img src="images/service/serviceSS3.jpg" style="width:100%">
        </div>
    
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- The dots/circles -->
    <div style="text-align:center;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>


    <!-- Contact -->
    <div class="gradientBack2">
        <p class="serviceMsgText" style="margin-bottom: 0%; margin-right: 5%;"> Ready to build your network? Lets Discuss.</p>
        <a href="contact.php"><button class="contact-btn">Contact Us</button></a>
    </div>

    <!-- Footer -->
    <footer class="center">
        <div class="footer-bottom">
            &copy; resin.com | Designed by Jawad Sayed Kadri | All Rights Reserved
        </div>
    </footer>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Custom Scripts -->
    <script src="js/scripts.js"></script>
    <script src="js/slideshow.js"></script>
</body>
</html>