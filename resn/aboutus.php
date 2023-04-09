<?php   include("path.php"); 
        include(ROOT_PATH . "/database/db.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Links all css formatting -->
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <meta name="author" content="Jawad Kadri">
    <meta name="description" content="About Page">
    <title>resn - About Us</title>
</head>

<body onload="startTime()">

    <!-- Header -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>

    <div>
        <div class="visionText">Our Vision</div>
        <div class="visionMessage">Pave your future - Are you Roady?</div>+

    </div>

    <div class="trends" style="padding-top: 0%;">
        <p>About Us</p>
    </div>

    <div>
        <div class="about-us-text">
            We are a Team Working and Building Buisness   
        </div>
        <img class="picTable fade-in-image" src="images\aboutus\buisness-table.jpeg" alt="Team siting at a table doing buisness">

        <div class="about-us-text" style="padding-top: 25px;">
            We work with the our in-built Systems, 
            which are used by 100's of buisnesses around the globe    
        </div>
        <img class="picTable fade-in-image" src="images\aboutus\coding.jpeg" alt="Computer screen with code on it">

        <div class="about-us-text" style="padding-top: 25px;">
            Pushing Virtual Reality Technology Futher
        </div>
        <img class="picTable fade-in-image" src="images\aboutus\virtual-reality.jpeg" alt="Women in VR">
    </div>

    <!-- Footer -->
    <footer class="center" style="padding-top: 30px;">
        <div class="footer-bottom">
            &copy; resin.com | Designed by Jawad Sayed Kadri | All Rights Reserved
        </div>
    </footer>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Custom Scripts -->
    <script src="js/scripts.js"></script>
</body>
</html>