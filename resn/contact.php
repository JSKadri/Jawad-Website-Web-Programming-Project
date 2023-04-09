<?php   include("path.php"); 
        include(ROOT_PATH . "/database/db.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Links all css formatting -->
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/contact.css" rel="stylesheet">
    <meta name="author" content="Jawad Kadri">
    <meta name="description" content="Contact Page">
    <title>resn - Contact Us</title>
</head>

<body onload="startTime();">

    <!-- Header -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>

    <div class="form-body">
        <h1 class="form-title">Contact Us</h1>
       <!-- Previously used google forms
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeLOuY-gfHXjOHLuy8iAxZf4LGilWgW9gqzf7fndt1DwnwbcQ/viewform?embedded=true" width="640" height="1100" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        -->
        <!-- target="_blank" action="/future-page.php" -->
        <form id="form">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your first name here...">
        
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name here...">
        
            <label for="learn">How did you learn about us?</label>
            <select id="options" name="learn" onchange="checkDisplayBox(this.value);">
              <option>-</option>
              <option value="sMedia">Social Media</option>
              <option value="sEngine">Seach Engine (Google, DuckDuckGo, and so on)</option>
              <option value="human">Through a friend, college, or someone else</option>
              <option value="other">Other</option>
            </select>
            <input type="text" name="learn" id="learn" style="display: none;" placeholder="Enter Text here..."/>

            <label for="email">Email</label>
            <input type="text" id="email" name="mail" placeholder="Your email here..."/>

            <label for="pnumber">Telephone</label>
            <br>
            <input type="text" id="pnumber" onkeyup="addDash(this.value)" style="max-width: 150px" placeholder="555-444-3333">

            <input id="checkSubmit" type="submit" value="Submit"/>
          </form>
        </div>

    <!-- Footer -->
    <footer class="center">
        <div class="footer-bottom" style="position:fixed; padding-top: 10px;">
            &copy; resin.com | Designed by Jawad Sayed Kadri | All Rights Reserved
        </div>
    </footer>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <!-- Custom Scripts -->
        <script src="js/scripts.js"></script>
        <script src="js/forms.js"></script>
</body>
</html>