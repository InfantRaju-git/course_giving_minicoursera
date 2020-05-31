<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $course=$_SESSION['course'];
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
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
    <title>Dashboard</title>
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
    <!-- Chatra {literal} -->
    <script>
    (function(d, w, c) {
        w.ChatraID = 'DaFdgDZWvTG6nG4mA';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
    window.ChatraSetup = {
    colors: {
        buttonText: '#fff', /* chat button text color */
        buttonBg: '#d1460f'    /* chat button background color */
    }
};
    </script>
<!-- /Chatra {/literal} -->
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="stu_index.php?q=1">
                                <i class="fas fa-chart-bar"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="stu_index.php?q=2">
                                <i class="fas fa-table"></i>Learn</a>
                        </li>
                        <li>
                            <a href="stu_index.php?q=3">
                                <i class="far fa-check-square"></i>Take Quiz</a>
                        </li>
                        <li>
                            <a href="stu_index.php?q=4">
                                <i class="fas fa-calendar-alt"></i>Submit Prototype</a>
                        </li>
                        <li>
                            <a href="logout.php?q=login.php">
                                <i class="fas fa-map-marker-alt"></i>Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                <h2 style="color:#000">Droid Docket</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a  href="stu_index.php?q=1">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="stu_index.php?q=2">
                                <i class="fas fa-chart-bar"></i>Learn</a>
                        </li>
                        <li>
                            <a href="stu_index.php?q=3">
                                <i class="fas fa-table"></i>Take Quiz</a>
                        </li>
                        <li>
                            <a href="stu_index.php?q=4">
                                <i class="far fa-check-square"></i>Submit prototype</a>
                        </li>
                        <li>
                        <a href="logout.php?q=login.php">
                            <i class="zmdi zmdi-power"></i>Logout</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
            <?php if(@$_GET['q']==1) 
            {
                $das1=mysqli_query($con,"SELECT score FROM user where email='$email'");      
                 while($row=mysqli_fetch_array($das1))
                 {
                    $score=$row['score'];
                 }
                 $das2=mysqli_query($con,"SELECT no_quiz,no_working FROM tracking where name='$name'");      
                 while($row=mysqli_fetch_array($das2))
                 {
                    $quizdone=$row['no_quiz'];
                    $workdone=$row['no_working'];
                 }
                 if($quizdone== NULL){
                     $quizdone=0;
                 }
                 if($workdone== NULL){
                    $workdone=0;
                }
                echo'
                <div class="section__content section__content--p30">
                    <h2 class="title-1">Hello '.$name.'!</h2></br>
                     <h5>Welcome to the course on '.$course.'  :)</h5>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>'.$score.'</h2>
                                                <span>Total Score</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="far fa-check-square"></i>
                                            </div>
                                            <div class="text">
                                                <h2>'.$quizdone.'</h2>
                                                <span>Quizes done</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="far fa-check-square"></i>
                                            </div>
                                            <div class="text">
                                                <h2>'.$workdone.'</h2>
                                                <span>Projects Submitted</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }?>

<?php if(@$_GET['q']==2) 
            {
                echo'<div class="section__content section__content--p30"><form action="stu_index.php?q=7" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>Load Quiz!!!
                    </button></div></form></div>';
                $das3=mysqli_query($con,"SELECT links FROM content where cname='$course'");
                $lin=array();
                while($row=mysqli_fetch_array($das3))
                {
                    $lin[]=$row['links'];}
                $q=mysqli_query($con,"SELECT * FROM tracking where name='$name'");      
                while($row=mysqli_fetch_array($q))
                {
                   $done=$row['no_quiz'];
                }
                $done=number_format($done);
                $j=$done+1;
                for($i=0;$i<$j;$i++)
                 {echo'<div class="map-data m-b-40">
                                        <h3 class="title-3 m-b-30">
                                            <i class="zmdi zmdi-map"></i>Content ('.($i+1).')</h3>
                                            <a href="'.$lin[$i].'" target="_blank">Click to open in new tab!</a>
                                             <iframe style="height:400px;width:900px;" src="'.$lin[$i].'"></iframe>
                                    </div>';
                 }
            }
            ?>

            <?php if(@$_GET['q']==4) 
            {echo'
                <form action="update.php?q=upimage&name='.$name.'&cname='.$course.'" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="au-task__item-inner"> 
                <div class="row form-group">
                <div class="col col-md-3">
                <label for="select-input" class=" form-control-label">  Select quiz:</label>
                </div>
                  <div class="col-6 col-md-3">
                  <select name="req" id="req" class="form-control">
                        <option value="NULL">Please select</option>';
                          $q3=mysqli_query($con,"SELECT DISTINCT(ass_no) FROM $course ");      
                          while($row=mysqli_fetch_array($q3) )
                          {
                            $ass_no=$row['ass_no'];
                            echo'<option value="'.$ass_no.'">&nbsp;'.$ass_no.'<br />';
                          }
                          echo'</select></div>
                          <div class="au-task__item-inner">    
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Attach your image link here</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" size="110" name="imgid" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                        </div></div>
                                        <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                <span class="badge badge-pill badge-warning">upload your image to your drive with public access</span></div>';
            }
            ?>

            <?php if(@$_GET['q']==3) 
            {echo'<center>
                <form action="stu_index.php?q=7" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="au-task__item-inner"> 
                <div class="row form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>Load Quiz!!!
                    </button></div></div></form></center>';}
                    ?>
              <?php if(@$_GET['q']==7) 
              {  
                  $ass=0;
                 $q=mysqli_query($con,"SELECT * FROM tracking where name='$name'");      
                 while($row=mysqli_fetch_array($q))
                 {
                    $done=$row['no_quiz'];
                 }
                    if ($ass=($done+1)){
                        $q=mysqli_query($con,"SELECT question,op1,op2,op3,op4 FROM $course where ass_no=$ass"); 
                        $i=1;
                        echo'<center><B><h1>Your are curently taking quiz No.'.$ass.'</h1></B></center><div class="au-task__item-inner">
                        <form action="update.php?q=markentry&cname='.$course.'&ass='.$ass.'&name='.$name.'" method="POST" enctype="multipart/form-data" class="form-horizontal">'; 
                        while(($row=mysqli_fetch_array($q))&&(count($row)>0))
                        {
                            $que=$row['question'];
                            $op1=$row['op1'];
                            $op2=$row['op2'];
                            $op3=$row['op3'];
                            $op4=$row['op4'];
                            echo'<h4>'.$i.'. '.$que.'</h4><br>
                            <div class="col-12 col-md-9">
                            <input type="radio" name="da'.$i.'" class="form-check-input" value=1>&nbsp;'.$op1.'<br/>
                            <input type="radio" name="da'.$i.'" class="form-check-input" value=2>&nbsp;'.$op2.'<br/>
                            <input type="radio" name="da'.$i.'" class="form-check-input" value=3>&nbsp;'.$op3.'<br/>
                            <input type="radio" name="da'.$i.'" class="form-check-input" value=4>&nbsp;'.$op4.'<br/> 
                            </div><br>';
                            $i++;
                        }  
                        echo'<div class="au-task__footer">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button> </div></form></div>'; 
                    }
                    else{
                        echo '<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                             <span class="badge badge-pill badge-warning">Failed to Load</span>
                                You have finished this quiz !!!
                            </div>';
                     }
               }
            ?>
            <?php if(@$_GET['q']==9) 
              {
                echo '<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                <span class="badge badge-pill badge-warning">Failed to Load</span>
                You have not finished this !!!
                </div>';
              }
              ?>
              <?php if(@$_GET['q']==10) 
              {
                echo '<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                <span class="badge badge-pill badge-warning">Done</span>
                Image uploaded !!!
                </div>';
              }
              ?>
              <?php if(@$_GET['q']==8) 
              {
                $scr=@$_GET['mark'];
                echo '<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                <span class="badge badge-pill badge-warning">Well Done!!!</span>
                You have finished a quiz !!!
                <h6>Yor score in the quiz is '.$scr.'</h6>
                </div>';
              }
              ?>

            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

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
<!-- end document-->
