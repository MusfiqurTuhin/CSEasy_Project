<?php
       session_start();
       $Fullname=$_GET['Fullname'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="png" href="images/icon/android-chrome-512x512.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <title>CSEasy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        $(window).on('scroll', function(){
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
</head>
<body>
    <!-- Navigation Bar -->
    <header id="header">
        <nav>
            <div class="logo"><img src="images/icon/logo.png" alt="logo"></div>
            <ul>
                <li><a class="active" href="">Home</a></li>
                <li><a class="active" href="BanglaContent_QA/">CSE Bangla Content</a></li>
                <li><a class="active" href="subjects/computer_courses.html">Bangla Courses</a></li>
               <li><a class="active" href="">Library</a>
                    <ul class="submenu">
                        <li><a href="read.html">Live Reading</a></li>
                        <li><a href="download.html">Download Books</a></li>
                    </ul>
                </li>
                <li><a class="active" href="">Practice</a></li>
                <li><a class="active" href="">Q&A</a></li>
            </ul>
            <div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="images/icon/search.png" alt="search" onclick=slide()></div>
            
            
            <?php if (isset($Fullname)) : ?>
        <a class="get-started" href="#"><?php echo $Fullname; ?></a>
        <a class="get-started" href="logout.php">Logout</a>
        <!-- Your blog content goes here for registered users -->
    <?php else : ?>
        <a class="get-started" href="login.php">Register</a>
    <?php endif; ?>
            
            
        <!--      Register --></a>
            <img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
        </nav>
        <div class="head-container">
            <div class="quote">
                <p>Empowering Your CSE Journey with CSEasy</p>
                <h5>Welcome to CSEasy, your one-stop destination for unlocking the full potential of your computer science education. We understand the challenges students face when it comes to accessing high-quality learning resources in the Bangla language. CSEasy is here to bridge that gap, providing you with a comprehensive online platform designed specifically for computer science enthusiasts at the university level.</h5>
                <div class="play">
                    <img src="images/icon/information-button.png" alt="about"><span><a href="#about_section" target="_blank">More...</a></span>
                </div>
            </div>
            <div class="svg-image">
                <img src="images/icon/brainbooster.png" alt="svg">
            </div>
        </div>
    </header>

    <!-- ABOUT -->
    <div class="diffSection" id="about_section">
        <center><p style="font-size: 50px; padding: 100px">About</p></center>
        <div class="about-content">
            <div class="side-image">
                <img class="sideImage" src="images/extra/e3.jpg">
            </div>
            <div class="side-text">
                <h2>Why CSEasy?</h2>
                <p>The motivation behind CSEasy stems from the absence of a dedicated platform for learning computer science in Bangla. Our goal is to empower students, like yourself, with a resource that makes it easier to clarify concepts, excel in studies, and pursue a successful career in the field.
                    Embark on your CSE journey with confidence. Explore, learn, and connect with CSEasy today!"
                    Feel free to customize the text based on specific details or features you want to highlight on your homepage. If you have any specific phrases or information you'd like to include, let me know, and I can help refine it further!
                </p>
            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <div class="service-swipe">
        <div class="diffSection" id="services_section">
            <center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
        </div>
        <a href="subjects/computer_courses.html"><div class="s-card"><img src="images/icon/computer-courses.png"><p>University-Level CSE Bangla Content</p></div></a>
        <a href="subjects/jee.html"><div class="s-card"><img src="images/icon/brainbooster.png"><p>Q&A Community </p></div></a>
        <a href="#"><div class="s-card"><img src="images/icon/online-tutorials.png"><p>Video Courses</p></div></a>
        <a href="subjects/jee.html#sample_papers"><div class="s-card"><img src="images/icon/papers.jpg"><p>eBook Library</p></div></a>
        <a href="#"><div class="s-card"><img src="images/icon/p3.png"><p>Practice Exercises </p></div></a>
        <a href="#contactus_section"><div class="s-card"><img src="images/icon/discussion.png"><p>User Engagement</p></div></a>
    </div>

    <!-- CONTACT US -->
    <div class="diffSection" id="contactus_section">
        <center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
        <div class="csec"></div>
        <div class="back-contact">
            <div class="cc">
            <form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
                <label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
                <center>
                <input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
                </center>
                <label>Email <span class="imp">*</span></label><br>
                <input type="email" name="mail" style="width: 100%" required="required"><br>
                <label>Message <span class="imp">*</span></label><br>
                <input type="text" name="message" style="width: 100%" required="required"><br>
                <label>Additional Details</label><br>
                <textarea name="additional"></textarea><br>
                <button type="submit" id="csubmit">Send Message</button>
            </form>
            </div>
        </div>
    </div>

    <!-- FEEDBACK -->
    <div class="title2" id="feedBACK">
        <span>Give Feedback</span>
        <div class="shortdesc2">
            <p>Please share your valuable feedback to us</p>
        </div>
    </div>

    <div class="feedbox">
        <div class="feed">
            <form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
                <label>Your Name</label><br>
                <input type="text" name="" class="fname" required="required"><br>
                <label>Email</label><br>
                <input type="email" name="mail" required="required"><br>
                <label>Additional Details</label><br>
                <textarea name="additional"></textarea><br>
                <button type="submit" id="csubmit">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Sliding Information -->
    <marquee style="background: linear-gradient(to right, #FA4B37, #DF2771); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20">
        <div class="marqu">Discover the power of CSEasy! Your gateway to comprehensive CSE learning in Bangla. Join our vibrant community today.</div>
    </marquee>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="left-col">
                <img src="images/icon/logowhite.png" style="width: 200px;">
                <div class="logo"></div>
                <div class="social-media">
                    <a href="#"><img src="images/icon/fb.png"></a>
                    <a href="#"><img src="images/icon/insta.png"></a>
                    <a href="#"><img src="images/icon/tt.png"></a>
                    <a href="#"><img src="images/icon/ytube.png"></a>
                    <a href="#"><img src="images/icon/linkedin.png"></a>
                </div><br><br>
                <p class="rights-text">Copyright © 2023 Created By Team CSEasy</p>
                <br><p><img src="images/icon/location.png"> United International University<br>Dhaka, Bangladesh </p><br>
                <p><img src="images/icon/phone.png"> +88012345667<br><img src="images/icon/mail.png">&nbsp; cseasy@gmail.com</p>
            </div>
            <div class="right-col">
                <h1 style="color: #fff">Our Newsletter</h1>
                <div class="border"></div><br>
                <p>Enter Your Email to get our News and updates.</p>
                <form class="newsletter-form">
                    <input class="txtb" type="email" placeholder="Enter Your Email">
                    <input class="btn" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </footer>
</body>
</html>