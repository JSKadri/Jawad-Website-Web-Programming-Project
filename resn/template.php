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
    <meta name="description" content="template">
    <title>Template</title>
</head>

<body onload="startTime()">

    <!-- Header -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>

    <!-- Footer -->
    <?php include(ROOT_PATH . "/include/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Custom Scripts -->
    <script src="js/scripts.js"></script>
</body>
</html>