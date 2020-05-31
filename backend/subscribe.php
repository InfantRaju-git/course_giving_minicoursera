<?php
    include_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Subscribe</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style type="text/css">

body{
    height:800px;
    scroll-behavior: smooth;
   background:rgba(0, 0, 0, 0.09);
}

.h{
    padding:70px;
    color:#DE5B04;
    opacity:0.9;
    font-size:35px;
    font-weight:500;
    
}

.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 20px;
	background: #f4f7f8;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 input[type="password"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 18px;
	font-weight:300;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:#EB551E;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 input[type="password"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: rgba(242, 100, 5, 0.14);
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:50px;
}
.form-style-5 .number {
	background: #DE5B04;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #F26405;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 70%;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: rgba(242, 100, 5, 0.79);
}
</style>

</head>

<body  style="height:auto;">

<div class="row">
<center>  <h1 class="h">Enroll for Droid_Docket...</h1> </center>
</div>
<div class="row" style="height:wrap-content !important;">
                          
<div class="form-style-5" style="height:auto;">
<fieldset>
<center><legend><span class="number">*</span> Fill your details<span class="number">*</span></legend></center>

</fieldset>
<form action="update.php?q=enroll" method="post" enctype="multipart/form-data">
<fieldset>
<legend><span class="number">1</span> Your Info:</legend>

<input type="text" name="fullname" placeholder="Your Full Name *" required />

<input type="text" name="college" placeholder="Your College *" required />

<input type="text" name="phno" placeholder="Phone Number (linked with google pay)" required />
   
</fieldset>

<fieldset>
<legend><span class="number">2</span> Personal Info:</legend>

<input type="email" name="email" placeholder="Your Email *" required />

<input type="password" name="password" placeholder="Password" required />
</fieldset>
<fieldset>
<legend><span class="number">3</span> Course Info:</legend>


<?php
                            $daten= date("M,d,Y h:i:s A");
                            echo'<input type="hidden" value='.$daten.' name="date">
                            <div class="form-group">';

                                $q=mysqli_query($con,"SELECT cname FROM course");    
                                echo'<select name="cname" id="cname">';
                                  
                                while($row=mysqli_fetch_array($q) )
                                {
                                    $option=$row['cname'];
                                    echo"<option value='".$option."'>".$option."</option>";
                                }
                                echo '</select>';
                                echo'</fieldset>
                                <fieldset>
                                <legend><span class="number">4</span> Pay now:</legend>
                                <input type="submit" value="Enroll" />
                                </fieldset></form> ';
                                ?>
                                    
                       
                </div>
            </div>
        

    <div>
    </div>
    <div>
    </div>
    <div>
    </div>
    <div>
    </div>
    <?php if(@$_GET['q']==12) 
                {
                    echo '<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                            <span class="badge badge-pill badge-warning">Failure</span>
                            Submission failed !!!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                }
?>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
</html>


