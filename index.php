
<!DOCTYPE html>
<html lang="en">
<head>
<title>Droid Docket</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

<!-- Header -->

<header class="header d-flex flex-row">
<div class="header_content d-flex flex-row align-items-center">
<!-- Logo -->
<div class="logo_container">
<div class="logo">
<img src="images/aaa.PNG" alt="logo">
<span>Droid Docket</span>
</div>
</div>

<!-- Main Navigation -->
<nav class="main_nav_container" id="navv">
<div class="main_nav">
<ul class="main_nav_list">
                        <li class="main_nav_item"><a href="#crcs">Courses</a></li>
                        <li class="main_nav_item"><a href="about.html">About</a></li>
<li class="main_nav_item"><a href="./backend/login.php">Login</a></li>
<li class="main_nav_item"><a href="./backend/subscribe.php">Enroll</a></li>
</ul>
</div>
</nav>
</div>
<div class="header_side d-flex flex-row justify-content-center align-items-center">
<img src="images/telephone.png" alt="">
<span>+91 97867 49993</span>
</div>

<!-- Hamburger -->
<div class="hamburger_container">
<i class="fas fa-bars trans_200"></i>
</div>

</header>

<!-- Menu -->
<div class="menu_container menu_mm">

<!-- Menu Close Button -->
<div class="menu_close_container">
<div class="menu_close"></div>
</div>

<!-- Menu Items -->
<div class="menu_inner menu_mm">
<div class="menu menu_mm">
<ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="#">Home</a></li>
                    <li class="menu_item menu_mm"><a href="#crcs">Courses</a></li>
                    <li class="main_nav_item"><a href="about.html">About</a></li>
<li class="menu_item menu_mm"><a href="#cntus">Contact</a></li>
<li class="menu_item menu_mm"><a href="./backend/login.php">Login</a></li>
<li class="main_nav_item"><a href="./backend/subscribe.php">Enroll</a></li>
</ul>

<div class="menu_copyright menu_mm">All rights reserved</div>
</div>

</div>

</div>
<!-- Home -->

<div class="home" id="hm">

<!-- Hero Slider -->
<div class="hero_slider_container">
<div class="hero_slider owl-carousel">

<!-- Hero Slide -->
<div class="hero_slide">
<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
<div class="hero_slide_content text-center">
<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
</div>
</div>
</div>

<!-- Hero Slide -->
<div class="hero_slide">
<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
<div class="hero_slide_content text-center">
<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
</div>
</div>
</div>

<!-- Hero Slide -->
<div class="hero_slide">
<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
<div class="hero_slide_content text-center">
<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
</div>
</div>
</div>

</div>

</div>

</div>


<!-- Register -->

<!--div class="register">

<div class="container-fluid">

<div class="row row-eq-height">
<div class="col-lg-6 nopadding">

<-- Register >

<div class="register_section d-flex flex-column align-items-center justify-content-center">
<div class="register_content text-center">
<h1 class="register_title">Text.................................... <span>50%</span> ................</h1>
<p class="register_text">......................................................................................................</p>
<div class="button button_1 register_button mx-auto trans_200"><a href="#cntus">Query</a></div>
</div>
</div>

</div>

<div class="col-lg-6 nopadding">

<-- Search >

<div class="search_section d-flex flex-column align-items-center justify-content-center">
<div class="search_background">
<object width="100%" height="100%"
data="https://www.youtube.com/v/Nl8w-5MH4mU?autoplay=1&controls=0&showinfo=0&autohide=1">
</object>
</div>

</div>

</div>

</div>
</div>
<div-->


<!-- Popular -->
<?php
$con= new mysqli('localhost','u637746618_exam','droid@123','u637746618_exam')or die("Could not connect to mysql".mysqli_error($con));
$das1=mysqli_query($con,"SELECT * FROM course;");
$text="<div class='popular page_section' id='crcs'><div class='container'><div class='row'><div class='col'><div class='section_title text-center'><h1>Our Courses</h1></div></div></div><div class='row course_boxes'>";
$i=0;
while($row=mysqli_fetch_array($das1))
{
$i=$i+1;
   $name=$row['cname'];
   $details=$row['description'];
   $duration=$row['dur'];
   $amount=$row['fees'];
   $text.="<div class='col-lg-4 course_box'><div class='card'><img class='card-img-top' src='images/course_".$i.".jpg' alt='' >";
   $text.="<div class='card-body text-center'><div class='card-title' style='color:#d1460f; font-size:30px;font-weight:500; padding:0px !important;'>".$name."</div>";
   $text.="<div class='card-text' style=' font-size:20px;font-weight:200;padding:0px !important;'>".$details."</div>     </div>";
   $text.="<div class='price_box d-flex flex-row align-items-center'><div class='course_author_name'>Duration: <span style='color: firebrick !important;font-size: 17px;'>".$duration."</span> <span> days</span></div>   <div class='course_price d-flex flex-column align-items-center justify-content-center'><span>&#x20b9;".$amount."</span></div>  </div>  </div>  </div>";

}
$text.="</div></div></div>";
echo $text;

?>

<!--
<div class="row course_boxes">
<-- Dynamic Courses >
<div class="col-lg-4 course_box">
<div class="card">
<img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
<div class="card-body text-center">
<div class="card-title"><a href="courses.html">Course A Name</a></div>
<div class="card-text">Details etc...</div>
</div>
<div class="price_box d-flex flex-row align-items-center">
<div class="course_author_name">Duration: <span style="color: firebrick !important;font-size: 17px;">6</span> <span> months</span></div>
<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>&#x20b9;2999</span></div>
</div>
</div>
</div>

</div>
</div>
</div>
-->

<!-- Contact Us -->

<div class="contact" id="cntus" style="padding-top:100px;">
<div class="container">
<div class="row">
<div class="col-lg-8">


<div class="contact_form" >
<div class="contact_title"  >Write To Us<br></div>

<div class="contact_form_container">
<form method="post" action="mail.php#mailsuccess" >

<input id="contact_form_name" name="name" class="input_field contact_form_name" type="text" placeholder="Name"
 required="required" data-error="Name is required."/>

<input id="contact_form_email" name="email" class="input_field contact_form_email" type="email"
 placeholder="E-mail" required="required" data-error="Valid email is required."/>

<input id="contact_form_subject" class="input_field contact_form_name" type="text"
 placeholder="Subject" name="subject" required="required" data-error="Subject is required."/>

<textarea id="contact_form_message" class="text_field contact_form_message mt-4 pt-3"
 name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>

<input type="submit" class="contact_send_btn trans_200"
 value="Submit Query"/>

</form>


</div>
</div>


</div>
<div class="col-lg-4 mt-5 pt-4" style="background:url('images/dummy.PNG');background-repeat: no-repeat;background-size: cover; left: 50px; height: 470px !important;width: 400px !important;">

</div>

</div>
</div>
</div>



<!-- Footer -->

<footer class="footer">
<div class="container">

<!-- Newsletter -->

<div class="newsletter">
<div class="row">
<div class="col">
<div class="section_title text-center">
<h1>Subscribe to newsletter</h1>
</div>
</div>
</div>

<div class="row">
<div class="col text-center">
<div class="newsletter_form_container mx-auto">
<form method="post" action="subscriber.php#mailsuccess">
<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
<input id="newsletter_email" class="newsletter_email" name="em" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
<input  type="submit" class="newsletter_submit_btn trans_300" value="Subscribe">
</div>
</form>
</div>
</div>
</div>

</div>

<!-- Footer Content -->

<div class="footer_content">
<div class="row">

<!-- Footer Column - About -->
<div class="col-lg-3 footer_col">

<div class="mapouter"><div class="gmap_canvas"><iframe width="257" height="311" id="gmap_canvas" src="https://maps.google.com/maps?q=droid%20docket&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:311px;width:257px;}.gmap_canvas {overflow:hidden;background:none!important;height:311px;width:257px;}</style></div>


</div>

<!-- Footer Column - Menu -->

<div class="col-lg-3 footer_col">
<div class="footer_column_title"  style="display: flex; justify-content: flex-end">MENU</div>
<div class="footer_column_content"  style="display: flex; justify-content: flex-end">
<ul>
<li class="footer_list_item"><a href="#hm">Home</a></li>
<li class="footer_list_item"><a href="#crcs">Courses</a></li>
<li class="footer_list_item"><a href="about.html">About</a></li>
<li class="footer_list_item"><a href="#cntus">Contact</a></li>
</ul>
</div>
</div>




<!-- Footer Column - Contact -->

<div class="col-lg-6 footer_col" style="padding-left:20% !important;">
<div class="footer_column_title" >CONTACT</div>
<div class="footer_column_content">
<ul>
<li class="footer_contact_item">
<div class="footer_contact_icon">
<img src="images/map.png" alt="https://www.flaticon.com/authors/lucy-g">
</div>
No:80, Kakkan St, West Tambaram, <br>&ensp;&ensp;&ensp;&ensp; &ensp;Tambaram, Chennai, <br>&ensp;&ensp;&ensp; &ensp;&ensp;Tamil Nadu 600045, India
</li>
<li class="footer_contact_item">
<div class="footer_contact_icon">
<img src="images/smartphone.png" alt="https://www.flaticon.com/authors/lucy-g">
</div>
+91 97867 49993
</li>
<li class="footer_contact_item">
<div class="footer_contact_icon">
<img src="images/email.png" alt="https://www.flaticon.com/authors/lucy-g">
</div> droiddocket@gmail.com
</li>
</ul>
</div>
</div>

</div>
</div>

<!-- Footer Copyright -->

<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
<div class="footer_copyright">
<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Made by InfantRajuR | AvinashWilsonJ
</div>
<div class="footer_social ml-sm-auto">
<ul class="menu_social">
<li class="menu_social_item"><a href="https://in.linkedin.com/in/droid-docket-49aa2519b"><i class="fab fa-linkedin-in"></i></a></li>
<li class="menu_social_item"><a href="https://www.instagram.com/droiddocket/"><i class="fab fa-instagram"></i></a></li>
<li class="menu_social_item"><a href="https://www.facebook.com/droid_docket-197758155704583"><i class="fab fa-facebook-f"></i></a></li>
<li class="menu_social_item"><a href="https://twitter.com/DocketDroid"><i class="fab fa-twitter"></i></a></li>
</ul>
</div>
</div>

</div>
</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>