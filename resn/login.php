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
    <meta name="description" content="template">
    <title>Login</title>
</head>

<body onload="startTime()">

    <!-- Header -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>
 
    <div class="form-body">
        <h1 class="form-title">Login</h1>
        <?php include(ROOT_PATH . "/assist/formError.php"); ?>

         <form id="form" action="login.php" method="post">
             <label for="uname">Username</label>
             <input type="text" id="uname" name="username" value="<?php echo $username;?>" placeholder="Your username name here...">
 
             <label for="password">Password</label>
             <input type="password" id="pass" name="password" value="<?php echo $password;?>" placeholder="Your password here..."/>
            
             <input id="checkLogin" type="submit" name="login-btn" value="Login"/>
            
             <p style="text-align: center;">Or <a href="<?php echo BASE_URL . '/register.php'?>">Register Now</a></p>
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