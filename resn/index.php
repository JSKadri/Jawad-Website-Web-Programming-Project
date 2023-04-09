<?php   include("path.php"); 
        include(ROOT_PATH . "/database/db.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Links all css formatting -->
    <link href="css/all.css" rel="stylesheet"> <!-- Font Awsome -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <meta name="author" content="Jawad Kadri">
    <meta name="description" content="Landing Page">
    <title>resn - Pave Your Future – Are You Roady?</title>
</head>

<body onload="startTime()">

    <!-- Header & Popup -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>
    <?php include(ROOT_PATH . "/include/popup.php"); ?>

    <div class="banner">
        <a><img class="banner-img" src="images/resnBanner.png" alt="RESN Banner"></a>
    </div>

    <div class="trends">
        <p>Current Trends</p>
    </div>

    <div class="row" style="margin-bottom: 0px;">
        <div class="column" style="margin: 0px auto;">
            <a target="_blank" href="https://www.hyundaicanada.com/en/vehicles/2021-nexo">
                <img class="pictrends  fade-in-image" src="https://www.hyundaicanada.com/-/media/hyundai/showroom/2019/2019-nexo-future/header-full-bleed/my21_nexo_img_001_t_1240x1240.jpg?h=1240&w=1240&hash=1728A8D2249EC594287AB19755EEC01B0ED6ED70" alt="Hyundai New Car with Collaberation with Resin" style="width:95%; height: 50%;"></a>
                <div class="curTrendtext"> <b>Hyundai Releases Nexo Collaberation with Resin</b></div>
            </div>
            <div class="column" style="margin: 0px auto;">
                <img class="pictrends fade-in-image" src="images/resinPhone.jpg" alt="Resin New Phone Release" style="width: 80%; height: 50%;">
                <div class="curTrendtext"> <b>Resin releases R40X2</b></div>
            </div>
            <div class="column" style="margin: 0px auto;">
                <a href="aboutme.php">
                <img class="pictrends fade-in-image-long" src="images\aboutme\Jawad.jpg" alt="About Jawad Kadri" style="width:52%; height: 50%;"></a>
                <div class="curTrendtext"> <b>About Jawad Kadri - Meet our top team member</b></div>
            </div>
    </div>

    <!-- Footer -->
    <?php include("include/footer.php"); ?>

     <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Custom Scripts -->
    <script src="js/scripts.js"></script>
</body>
</html>