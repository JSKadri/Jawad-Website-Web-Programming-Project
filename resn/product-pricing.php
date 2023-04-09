<?php   include("path.php"); 
        include(ROOT_PATH . "/database/db.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Links all css formatting -->
    <link href="css/all.css" rel="stylesheet"> <!-- Font Awsome -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/product-pricing.css" rel="stylesheet" type="text/css">
    <meta name="author" content="Jawad Kadri">
    <meta name="description" content="template">
    <title>Product and Pricing</title>
</head>

<body onload="startTime()">

    <!-- Header -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>

    <img src="images/network-wires.jpg" alt="Pricing" class="pricing-img" style="height: 40%; width: 100%;">    

    <h1 class="tableHeader" style="margin-top: 0%;">Cost To Build Your Network</h1>

    <div class="columns" style="padding-bottom: 80px;">
        <ul class="price">
            <li class="header">Small Network</li>
            <li class="colour">Approx. $4,999 USD</li>
            <li class="colour">365 Days Warrenty</li>
            <li class="colour">Limited Support</li>
            <li class="colour">Max Speed 500 Mbps Speed</li>
            <li class="colour">No Discounts</li>
            <li class="colour"><a href="#" class="button">Purchase</a></li>
        </ul>
    </div>

    <div class="columns" style="padding-bottom: 80px;">
        <ul class="price">
            <li class="header">Medium Network</li>
            <li class="colour">Approx. $49,999 USD</li>
            <li class="colour">5 Year Warrenty</li>
            <li class="colour">Limited Support</li>
            <li class="colour">Max Speed 1 Gbps Speed</li>
            <li class="colour">Discounts Only On Routing Devices</li>
            <li class="colour"><a href="#" class="button">Purchase</a></li>
        </ul>
    </div>

    <div class="columns" style="padding-bottom: 80px;">
        <ul class="price">
            <li class="header">Large Network</li>
            <li class="colour">Approx. $9,999,999 USD</li>
            <li class="colour">10 Year Warrenty</li>
            <li class="colour">24/7 Direct Call and Text Support</li>
            <li class="colour">Max Speed 10 Gbps Speed</li>
            <li class="colour">Discounts On All Devices & Additional Services</li>
            <li class="colour"><a href="#" class="button">Purchase</a></li>
        </ul>
    </div>
    
    <!-- Footer -->
    <footer class="center" style="padding-top: 29%;">
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