<?php
$name=$_POST['name'];
$em=$_POST['email'];
$sub=$_POST['subject'];
$m=$_POST['message'];

ini_set("SMTP","smtp.gmail.com"); 
ini_set("smtp_port","587");



$to = "droiddocket@gmail.com";
$subject = $sub;

$message = '
<html>
<head>
<style>#customers {
   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
   border-collapse: collapse;
   width: 100%;
 }
 
 #customers td, #customers th {
   border: 1px solid #ddd;
   padding: 8px;
 }
 
 #customers tr:nth-child(even){background-color: #f2f2f2;}
 
 #customers tr:hover {background-color: #ddd;}
 
 #customers th {
   padding-top: 12px;
   padding-bottom: 12px;
   text-align: left;
   background-color: #E64210;
   color: white;
 }
</style>
</head>

<body>

<table id="customers">
<thead>
<tr>
<th>Field</th><th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>NAME</td><td>'.$name.'</td></tr>
<tr>
<td>SUBJECT</td><td>'.$subject.'</td></tr>
<tr>
<td>EMAIL</td><td>'.$em.'</td></tr>
<tr>
<td>MESSAGE</td><td>'.$m.'</td></tr>
</tbody>
</tr>
</table>

</body>
</html>

';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From:'.$em . "\r\n";

mail($to,$subject,$message,$headers);
?>

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
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
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
                        <li class="main_nav_item"><a href="index.php">Home</a></li>
                        <li class="main_nav_item"><a href="index.php#crcs">Courses</a></li>
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
                    <li class="menu_item menu_mm"><a href="index.php">Home</a></li>
                    <li class="menu_item menu_mm"><a href="index.php#crcs">Courses</a></li>
					<li class="menu_item menu_mm"><a href="index.php#cntus">Contact</a></li>
                    <li class="menu_item menu_mm"><a href="./backend/login.php">Login</a></li>
                    
                    <li class="main_nav_item"><a href="./backend/subscribe.php">Enroll</a></li>
				</ul>

				<div class="menu_copyright menu_mm">All rights reserved</div>
			</div>

		</div>

	</div>
	<!-- Home -->

	<div class="home" id="hm" style="height: 500px; ">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">About <span>D</span>roid <span>D</span>ocket !!!</h1>
						</div>
					</div>
                </div>
                <!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">About <span>D</span>roid <span>D</span>ocket !!!</h1>
						</div>
					</div>
				</div>
				

			</div>

		</div>

    </div>
    
    <!--success-->
    
<div class='popular page_section' id='mailsuccess'>
    <div class='container'>
        <div class='row'>
        <div class='col'>
            <div class='section_title text-center'>
                <h1>!!!Query Successfully Sent!!!</h1>
                </div>
                </div>
                </div>
    </div>
</div>
               

		
	<!-- Footer -->

	<footer class="footer" >
		<div class="container">
			
		
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
								<li class="footer_list_item"><a href="#">About</a></li>
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
<script src="js/elements_custom.js"></script>
</body>
</html>