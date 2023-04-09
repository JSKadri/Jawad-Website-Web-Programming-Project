<?php include("path.php"); ?>
<?php include("controllers/users.php"); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Links all css formatting -->
    <link href="css/all.css" rel="stylesheet"> <!-- Font Awsome -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/contact.css" rel="stylesheet">
    <meta name="author" content="Jawad Kadri">
    <meta name="description" content="registration-page">
    <title>Register</title>
</head>

<body onload="startTime()">

    <!-- Header -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>
 
    <div class="form-body">
        <h1 class="form-title">Register</h1>

        <?php include(ROOT_PATH . "/assist/formError.php"); ?>
        

         <form id="form" action="register.php" method="post">
             <label for="uname">Username</label>
             <input type="text" id="uname" name="username" placeholder="Your username name here...">
  
             <label for="email">Email</label>
             <input type="email" id="email" name="email" placeholder="Your email here..."/>
 
             <label for="pass">Password</label>
             <input type="password" id="pass" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required
             style="margin-bottom: 0%;" placeholder="Your password here...">
            
             <label style="font-size: 20px;">Show Password</label>
             <input type="checkbox" onclick="showPassword()">
             <br>
             <label for="cpass">Confirm Password</label>
             <input type="password" id="cpass" name="password2" placeholder="Your password again..."/>

             <input style="margin-bottom: 0%;" id="checkRegister" name="register-btn" type="submit" value="Register"/>
            
             <p style="text-align: center; margin-bottom: 0%; margin-top: 1%;">Or <a href="<?php echo BASE_URL . '/login.php'?>">Sign In</a></p>
        </form>
    </div>

    <div class="form-body" id="message">
        <h3 style="font-size: 29px; margin-bottom: 0%;">Password must contain the following:</h3>

        <div style="width: 100%;">
            <div style="width: 51%; height: 140px; float: left;"> 
                <div id="letter" class="invalid">A <b>lowercase</b> letter</div>
                <div id="capital" class="invalid">A <b>capital (uppercase)</b> letter</div>
                <div id="match" class="invalid">Must <b>match</b></div>
            </div>
            
            <div style="margin-left: 50%; height: 140px;">
                <div id="number" class="invalid">A <b>number</b></div>
                <div id="length" class="invalid">Minimum <b>8 characters</b></div>
                <div id="special" class="invalid">A <b>special character</b></div>
            </div>
        </div>
    </div>

    <br><br><br>

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
    <script src="js/checkPassword.js"></script>
</body>
</html>