<header>
    <div class="container">
        <a href="<?php echo BASE_URL . '/index.php' ?>"> <img src="images/resnLogo.png" alt="RESN" class="logo"></a>
        <nav>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
    
                <?php if(isset($_SESSION['id'])) : ?>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['username']; ?>
                            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                        </a>
                        <ul>
                            <?php if($_SESSION['permission'] === 3): ?> <!-- Admin -->
                                <li><a href="<?php echo BASE_URL . '#'?>">Portal</a></li> <!-- This page doesn't exist -->
                                <li><a href="<?php echo BASE_URL . '/product-pricing.php' ?>">Services</a></li>
                            <?php elseif($_SESSION['permission'] === 2): ?> <!-- Customer -->
                                <li><a href="<?php echo BASE_URL . '/product-pricing.php' ?>">Services</a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="<?php echo BASE_URL . '/register.php' ?>">Register</a></li>
                    <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <div class="clock" id="clock"></div>
    </div>
</header>