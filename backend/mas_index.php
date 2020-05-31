<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name1 = $_SESSION['name'];
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
    <title>Master Panel</title>

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
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                <h2 style="color:#FFF">Droid Docket</h2>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon.png" alt="admin" />
                    </div>
                    <h4 class="name">Master</h4>
                    <a href="logout1.php?q=admin.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a  href="mas_index.php?q=2">
                            <?php if(@$_GET['q']==2) ; ?> <i class="fas fa-tachometer-alt"></i>Create Course
                            </a>
                        </li>
                        <li>
                            <a  href="mas_index.php?q=1">
                            <?php if(@$_GET['q']==1) ; ?> <i class="fas fa-tachometer-alt"></i>Create Admin
                            </a>
                        </li>
                        <li>
                            <a href="mas_index.php?q=4">
                            <?php if(@$_GET['q']==4) ; ?><i class="fas fa-chart-bar"></i>Create student</a>
                        </li>
                        <li>
                            <a href="mas_index.php?q=15">
                            <?php if(@$_GET['q']==15) ; ?><i class="fas fa-chart-bar"></i>Verify Contents</a>
                        </li>
                        <li>
                            <a href="mas_index.php?q=45">
                            <?php if(@$_GET['q']==45) ; ?><i class="fas fa-chart-bar"></i>View Enrollments</a>
                        </li>
                        <li>
                            <a href="mas_index.php?q=3">
                            <?php if(@$_GET['q']==3) ; ?><i class="fas fa-chart-bar"></i>View Details</a>
                        </li>
                        <li>
                            <a href="mas_index.php?q=20">
                            <?php if(@$_GET['q']==20) ; ?>  <i class="fas fa-copy"></i>Delete
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
            </header>

            <!-- MAIN CONTENT-->
            <div class="main-content">
            
            <?php if(@$_GET['q']==0) 
                {
                    echo'<div class="card-body">
                    <div class="typo-headers">
                      <h1 class="pb-2 display-4">Hello !</h1>
                      <h2 class="pb-2 display-5">Your in Master console panel now!</h2>
                      </div>
                      </div>';
                }
            ?>
             <?php if(@$_GET['q']==1) 
                {
                  echo'<div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3><i class="zmdi zmdi-account-calendar"></i>Create Admin</h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                    <div class="au-task__title">
                                            <p>use underscore _insted of whitespaces</p>
                                    </div>
                                        <form action="update.php?q=adminentry" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                           <div class="au-task__item-inner">    
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="au-task__item-inner">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="au-task__item-inner">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"> Confirm Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password1" name="password1" placeholder="Password" class="form-control">                                                </div>
                                            </div>
                                            </div>    
                                            <div class="au-task__item-inner">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select-input" class=" form-control-label">Select Course</label>
                                                </div>
                                                <div class="col-12 col-md-9">';
                                                $q=mysqli_query($con,"SELECT cname FROM course");      
                                                while($row=mysqli_fetch_array($q) )
                                                {
                                                    $option=$row['cname'];
                                                    echo'<input type="radio" class="form-check-input" name="cname" id="cname" value="'.$option.'">&nbsp;'.$option.'<br />';
                                                }
                                            echo' </div>
                                            </div>
                                            <div class="au-task__footer">
                                                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                    
                }
            ?>
            <?php if(@$_GET['q']==45) 
                { $result1=mysqli_query($con,"select * from user_enrolled");
                    echo '<h2>Enrollments</h2><div class="container-fluid">
                    <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th><center>S.no</center></th>
                            <th><center>Date of Enrollment</center></th>
                            <th><center>Full name</center></th>
                            <th><center>Email</center></th>
                            <th><center>Password</center></th>
                            <th><center>College</center></th>
                            <th><center>Course</center></th>
                            <th><center>Phone number</center></th>
                       </tr>
                    </thead>';
                    $c=1;
                    while($row = mysqli_fetch_array($result1)) 
                    {
                        $fname=$row['full_name'];
                        $date=$row['date'];
                        $coll=$row['college'];
                        $phno=$row['phone_number'];
                        $email=$row['email'];
                        $pass=$row['password'];
                        $course=$row['course'];
                        echo '<tbody><tr><td><center>'.$c++.'</center></td>
                        <td><center>'.$date.'</center></td>
                        <td><center>'.$fname.'</center></td>
                        <td><center>'.$email.'</center></td>
                        <td><center>'.$pass.'</center></td>
                        <td><center>'.$coll.'</center></td>
                        <td><center>'.$course.'</center></td>
                        <td><center>'.$phno.'</center></td>
                        </tr></tbody>';
                    }
                    echo '</table></div></div>';
                }
            ?>
            <?php if(@$_GET['q']==2) 
                {
                    echo'<div class="col-lg-6">
                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                        <div class="au-card-title">
                            <div class="bg-overlay bg-overlay--blue"></div>
                            <h3><i class="zmdi zmdi-account-calendar"></i>Create Course</h3>
                        </div>
                        <div class="au-task js-list-load">
                        <div class="au-task__title">
                                <p>use underscore _insted of whitespaces</p>
                        </div>
                            <form action="update.php?q=courseentry" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <div class="au-task__item-inner">    
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Course Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="cname" name="cname" placeholder="Text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="au-task__item-inner">    
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Course ID</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="cno" name="cno" placeholder="Text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="au-task__item-inner">    
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Course Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <textarea id="cdesc" name="cdesc" placeholder="Text" class="form-control" rows= cols=></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="au-task__item-inner">    
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Course Duration (in days)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="dur" name="dur" placeholder="Text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="au-task__item-inner">    
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Course Fees (in rupees)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="fee" name="fee" placeholder="Text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="au-task__footer">
                                                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                        </div><div>  </div> ';
                }
            ?>
        <?php if(@$_GET['q']==3) 
                {
                    echo'<span></span>
                    <div class="typo-headers">
                    <h3 class="pb-2 display-5">Admin</h3>';
                    $result1 = mysqli_query($con,"SELECT * from admin ") or die('Error');
                    echo '<div class="container-fluid">
                    <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th><center>S.no</center></th>
                            <th><center>Email</center></th>
                            <th><center>Password</center></th>
                            <th><center>Course</center></th>
                       </tr>
                    </thead>';
                    $c=1;
                    while($row = mysqli_fetch_array($result1)) 
                    {
                        $email=$row['email'];
                        $pass=$row['password'];
                        $course=$row['course'];
                        echo '<tbody><tr><td><center>'.$c++.'</center></td><td><center>'.$email.'</center></td><td><center>'.$pass.'</center></td><td><center>'.$course.'</center></td>
                        </tr></tbody>';
                    }
                    $c=0;
                    echo '</table></div></div>';
                    echo'<div class="typo-headers">
                    <h3 class="pb-2 display-5">Student details</h3>';
                    $res = mysqli_query($con,"SELECT * FROM user") or die('Error');
                        echo  '<div class="container-fluid">
                        <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th><center>S.no</center></th>
                                <th><center>Name</center></th>
                                <th><center>Course</center></th>
                                <th><center>score</center></th>
                            </tr>
                        </thead>';
                        $c=1;
                        while($row = mysqli_fetch_array($res)) 
                        {
                            $name = $row['name'];
                            $course = $row['cname'];
                            $sco = $row['score'];
                            echo '<tbody><tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$course.'</center></td><td><center>'.$sco.'</center></td></tr></tbody>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    echo'<div class="typo-headers">
                    <h3 class="pb-2 display-5">Student progress details</h3>';
                    $result = mysqli_query($con,"SELECT * FROM tracking") or die('Error');
                        echo  '<div class="container-fluid">
                        <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th><center>S.no</center></th>
                                <th><center>Name</center></th>
                                <th><center>Course</center></th>
                                <th><center>no_quiz</center></th>
                                <th><center>no_workings</center></th>
                            </tr>
                        </thead>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $course = $row['cname'];
                            $quiz = $row['no_quiz'];
                            $work=$row['no_working'];
                            echo '<tbody><tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$course.'</center></td><td><center>'.$quiz.'</center></td><td><center>'.$work.'</center>
                            </tr></tbody>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                }
            ?>
        <?php if(@$_GET['q']==7) 
                {
                    echo '<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                            <span class="badge badge-pill badge-warning">Success</span>
                            Task Created successfully !!!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                }
        ?>
        <?php if(@$_GET['q']==8) 
                {
                    echo '<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                            <span class="badge badge-pill badge-warning">Failure</span>
                            Task Creation failed !!!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                }
        ?>
         <?php if(@$_GET['q']==4) 
                {
                  echo'<div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3><i class="zmdi zmdi-account-calendar"></i>Create Student</h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                    <div class="au-task__title">
                                            <p>use underscore _insted of whitespaces</p>
                                    </div>
                                        <form action="update.php?q=studententry" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="au-task__item-inner">    
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__item-inner">    
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">College</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="college" name="college" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                           <div class="au-task__item-inner">    
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="au-task__item-inner">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="au-task__item-inner">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"> Confirm Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password1" name="password1" placeholder="Password" class="form-control">                                                </div>
                                            </div>
                                            </div>    
                                            <div class="au-task__item-inner">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Select Course</label>
                                                </div>
                                                <div class="col-12 col-md-9">';
                                            $q1=mysqli_query($con,"SELECT cname FROM course");      
                                                while($row=mysqli_fetch_array($q1) )
                                                {
                                                    $option=$row['cname'];
                                                    echo'<input type="radio" class="form-check-input" name="cname" id="cname" value="'.$option.'">&nbsp;'.$option.'<br />';
                                                }
                                             echo' </div><div class="au-task__footer">
                                                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                    
                }
            ?>

            <?php if(@$_GET['q']==15) 
                {
                    $das3=mysqli_query($con,"SELECT links,cname FROM content where isverified='No'");
                $i=1; 
                while($row=mysqli_fetch_array($das3))
                {
                    $lin=$row['links'];
                    $cn=$row['cname'];
                  echo'<div class="map-data m-b-40">
                        <h3 class="title-3 m-b-30">
                        <i class="zmdi zmdi-map"></i>Content ('.$i.')</h3>
                        <a href="'.$lin.'" target="_blank">Click to open in new tab!</a>
                        <iframe style="height:400px;width:900px;" src="'.$lin.'"></iframe>
                        <form action="update.php?q=verify" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <input type="hidden" id="reqver" name="reqver" value="Yes">
                        <input type="hidden" id="reqlin" name="reqlin" value="'.$lin.'">
                        <center> <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>Verify
                        </button><span></span>
                        <button type="submit" name="remove" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>remove
                        </button></center></div>';
                        $i++;}
                       echo' <div class="typo-headers">
                    <h3 class="pb-2 display-5">Content verification details</h3>';
                    $res_cont = mysqli_query($con,"SELECT * FROM content") or die('Error');
                        echo  '<div class="container-fluid">
                        <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th><center>Course Name</center></th>
                                <th><center>isverified</center></th>
                                <th><center>link</center></th>
                            </tr>
                        </thead>';
                      while($row = mysqli_fetch_array($res_cont)) 
                        {
                            $cname = $row['cname'];
                            $link = $row['links'];
                            $isver=$row['isverified'];
                            echo '<tbody><tr><td><center>'.$cname.'</center></td><td><center>'.$isver.'</center></td><td><center>'.$link.'</center>
                            </tr></tbody>';
                        }
                        echo '</table></div></div>';
                }
            ?>

        <?php if(@$_GET['q']==20) 
        {   echo'<form action="update.php?q=delstu1" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="au-task__item-inner"> 
            <div class="row form-group">
            <div class="col col-md-3">
            <label for="select-input" class=" form-control-label">Student:</label>
            </div>
              <div class="col-6 col-md-3">
              <select name="nam" id="nam" class="form-control">
                    <option value="NULL">Please select</option>';
                      $q3=mysqli_query($con,"SELECT DISTINCT(name) FROM user ");      
                      while($row=mysqli_fetch_array($q3) )
                      {
                        $names=$row['name'];
                        echo'<option value="'.$names.'">&nbsp;'.$names.'<br />';
                      }
                      echo'</select></div>
                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Delete
                </button></div></div></form>
                ';
                echo'<form action="update.php?q=delcou" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="au-task__item-inner"> 
            <div class="row form-group">
            <div class="col col-md-3">
            <label for="select-input" class=" form-control-label">Course:</label>
            </div>
              <div class="col-6 col-md-3">
              <select name="nam" id="nam" class="form-control">
                    <option value="NULL">Please select</option>';
                      $q3=mysqli_query($con,"SELECT cname FROM course ");      
                      while($row=mysqli_fetch_array($q3) )
                      {
                        $names=$row['cname'];
                        echo'<option value="'.$names.'">&nbsp;'.$names.'<br />';
                      }
                      echo'</select></div>
                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Delete
                </button></div></div></form>';
                echo'<form action="update.php?q=upadmin" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="au-task__item-inner"> 
            <div class="row form-group">
            <div class="col col-md-3">
            <label for="select-input" class=" form-control-label">Change Admin password:</label>
            </div>
              <div class="col-6 col-md-3">
              <select name="id" id="id" class="form-control">
                    <option value="NULL">Please select</option>';
                      $q3=mysqli_query($con,"SELECT email FROM admin ");      
                      while($row=mysqli_fetch_array($q3) )
                      {
                        $mail=$row['email'];
                        echo'<option value="'.$mail.'">&nbsp;'.$mail.'<br />';
                      }
                      echo'</select></div>
                      <div class="au-task__item-inner">    
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">New password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="pass" name="pass" class="form-control">
                                    </div>
                                </div>
                            </div></div>
                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> update password
                </button></div></form>';
                
        }
        ?>

            
            </div>
    <!---MAIN END -->
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
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
