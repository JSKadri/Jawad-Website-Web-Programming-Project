<?php   include("path.php"); 
        include(ROOT_PATH . "/database/db.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta name="author" content="Jawad Kadri">
    <meta name="description" content="aboutme-webpage">
    <title>About Me</title>
</head>

<!-- Links all css formatting -->
<link href="css/all.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/aboutme-style.css" rel="stylesheet" type="text/css">

<body onload="startTime()"></body>

    <!-- Header -->
    <?php include(ROOT_PATH . "/include/header.php"); ?>

    <div>
        <br><br>
        <h1 class="center orangeunderline"> Jawad Sayed Kadri </h1>
    </div>

    <!-- Picture of my set to the right side of the webpage -->
    <p class="jawadPic">
        <img  src="images\aboutme\Jawad.jpg" alt="" width="450" height="550" style="border: 5px solid orange;">
    </p>

    <!-- LinkedIn and Resume Icons -->
    <p class="icons">
        <!-- The images can be clicked and lead to the corresponding site -->
        <a 
            href="https://www.linkedin.com/in/jawadskadri/" target="_blank">
            <img class="highlight" src="images\aboutme\linkedinIcon.png" alt="" width="100" height="100">
        </a>
        <a 
            href="" > <!-- target="_blank"> --> <!-- Removed due to outdated and not an official webpage -->
            <img class="highlight" src="images\aboutme\resumeIcon.png" alt="" width="100" height="100">
        </a>
    </p>

    <!-- Bullet Points -->
    <p class="biggerText"> 
        <span class='biggerDot'>•</span>  Received Juniper Networks Certified Associate: JNCIA
        <br> <span class='biggerDot'>•</span>  Currently Networking Class Representative at Algonquin College
        <br> <span class='biggerDot'>•</span>  Awarded VEX Robotics Tournament Finalist and Energetic Trophy 2016-2017 
        <br> <span class='biggerDot'>•</span>  Graduated from High School with Honors and Specialist High Skills Major in ICT
    </p>
    
    <!-- Address/Phone Number/Email (Most information is removed to protect my identity, since the website is being uploaded to github) -->
    <p class="biggerText"> 
        [REDACTED ADDRESS], [REDACTED POSTALCODE] <br> [REDACTED PHONE NUMBER] <br>
        <a class="orangetext texteffect" href="mailto:jawad.kadri@carleton.ca?subject=From About Me Page" target="_top">jawad.kadri@carleton.ca</a>
    </p>

    <!-- Pharagraph Sentance -->
    <p class="biggerText"><br><br><br>
        I am <i class="orangeunderline">Jawad Kadri</i>, a student at Carleton University, finishing up my third year of the 
        Bachelor of Information Technology program, with a focus on Network Technology. I’ve been wanting to pursue a career in the network 
        industry since my early high school days where I learned a lot through courses such as Robotics, Java, Communication Technology, as well as my CO-OP at Ericsson. 
        Throughout my high school education, I have picked up on hobbies such as programming, video and photo editing and even working in group projects. 
    <br><br>
        Currently I am looking to <strong style="color: orange;">achieve</strong> a CO-OP for 4–12-month positions starting <u class="orangeunderline">Summer 2022</u>. 
        If you believe I meet the experience, skills, and currently what you are seeking in a CO-OP student please feel free to contact me!
    <br><br>
        Below are some of the many skills I have gained through my program as during my self-study:
    <br>
    <!-- Bullet Points -->
    <span class='biggerDot'>•</span>	Writing and testing code using C, C++, Python, Java and recently ARM Assembly Language<br>
    <span class='biggerDot'>•</span>	Using DevOps applications, specifically Ansible, Docker, Jenkins, Kubernetes, Git, GitHub, and Azure<br>
    <span class='biggerDot'>•</span>	Configure virtual machines notably Linux, Centos, and Window Servers, using VMware and Virtual box<br>
    <span class='biggerDot'>•</span>	Writing detailed technical reports, troubleshooting, and testing lab devices<br>
    <span class='biggerDot'>•</span>	Completed Junos JNCIA certification and working towards Cisco CCNA<br>
    <span class='biggerDot'>•</span>	Working in team and individual projects at my CO-OP at Ericsson and GDMS<br>
    </p>

    <!-- Text Links to my interests -->
    <h2 class="biggerText">My Current Interests:</h2>
    <p class="biggerText center">
        <a class="orangetext texteffect" target="_blank" href="https://store.steampowered.com/app/1151640/Horizon_Zero_Dawn_Complete_Edition/"> Horizon Zero Dawn</a>&nbsp; |  
        <a class="orangetext texteffect" target="_blank" href="https://youtu.be/KBXTnrD_Zs4"> Creating a Pi-Hole Server</a> | 
        <a class="orangetext texteffect" target="_blank" href="https://genshin.mihoyo.com/en"> Genshin Impact</a>
    </p>
    
    <!-- Image Links and an embedded youtube video of the same interests -->
    <div class="row">
        <div class="column">
            <a target="_blank" href="https://store.steampowered.com/app/1151640/Horizon_Zero_Dawn_Complete_Edition/">
          <img class="imagbordereffect" src="images\aboutme\Horizon_Zero_Dawn.png" alt="" style="width:100%; height: 100%; border-radius: 5px;">
            </a>
        </div>
        <div class="column">
            <iframe class="imagbordereffect" src="https://www.youtube.com/embed/KBXTnrD_Zs4" alt="" style="width: 100%; height: 100%;" allowfullscreen></iframe>
        </div>
        <div class="column">
            <a target="_blank" href="https://genshin.mihoyo.com/en">
            <img class="imagbordereffect" src="images\aboutme\Genshin_Impact.jpg" alt="" style="width:100%; height: 100%; border-radius: 5px;">
            </a>
        </div>
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