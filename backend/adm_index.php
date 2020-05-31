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
        $course=$_SESSION['course'];
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
    <title>Admin Panel</title>

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
                    <h4 class="name">Admin</h4>
                    <a href="logout1.php?q=admin.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="adm_index.php?q=3">
                            <?php if(@$_GET['q']==3) ; ?><i class="fas fa-chart-bar"></i>View Student Progress</a>
                        </li>
                        <li>
                            <a href="adm_index.php?q=4">
                            <?php if(@$_GET['q']==4) ; ?> <i class="fas fa-shopping-basket"></i>Assign tutorial</a>
                        </li>
                        <li>
                            <a href="adm_index.php?q=10">
                            <?php if(@$_GET['q']==10) ; ?> <i class="fas fa-shopping-basket"></i>View Submissions</a>
                        </li>
                        <li>
                            <a href="adm_index.php?q=5">
                            <?php if(@$_GET['q']==5) ; ?> <i class="fas fa-trophy"></i>Assign questions
                            </a>
                        </li>
                        <li>
                            <a href="adm_index.php?q=6">
                            <?php if(@$_GET['q']==6) ; ?>  <i class="fas fa-copy"></i>Evaluate
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
                      <h1 class="pb-2 display-4">Welcome !</h1><br>
                      <h4 class="pb-2 display-5">Admin console panel for <u>'.$course.' course</u></h4>
                      </div>
                      </div>';
                }
            ?>
            
        <?php if(@$_GET['q']==3) 
                {
                    echo'<div class="typo-headers">
                    <h3 class="pb-2 display-5">Student details</h3>';
                    $result = mysqli_query($con,"SELECT * FROM tracking where cname='$course'") or die('Error');
                        echo  '<div class="container-fluid">
                        <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th><center>S.no</center></th>
                                <th><center>Name</center></th>
                                <th><center>no_quiz</center></th>
                                <th><center>no_workings</center></th>
                            </tr>
                        </thead>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $quiz = $row['no_quiz'];
                            $work=$row['no_working'];
                            echo '<tbody><tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$quiz.'</center></td><td><center>'.$work.'</center>
                            </tr></tbody>';
                        }
                        $c=0;
                        echo '</table></div></div>
                        <div class="typo-headers">
                        <h3 class="pb-2 display-5">Student details</h3>';
                        $result101 = mysqli_query($con,"SELECT name,score FROM user where cname='$course'") or die('Error');
                        echo  '<div class="container-fluid">
                        <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <tr>
                        <th><center>Name</center></th>
                        <th><center>Score</center></th>
                        </tr>
                        </thead>';
                while($row = mysqli_fetch_array($result101)) 
                {
                    $name = $row['name'];
                    $score = $row['score'];
                    echo '<tbody><tr><td><center>'.$name.'</center></td><td><center>'.$score.'</center></td></tr></tbody>';
                }
                echo '</table></div></div>';
                }
            ?>

             <?php if(@$_GET['q']==4) 
                {
                    echo'<form action="update.php?q=upcont" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="au-task__item-inner">    
                    <div class="row form-group">
                            <input type="hidden" name="cname" id="cname" value="'.$course.'">
                            <div class="au-task__item-inner">    
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Attach your content link </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" size="100" name="contid" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                        </center></div></div>
                                        <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                <span class="badge badge-pill badge-warning">1.Open the tutorial document in google Docs. click File->publish web to upload</span></div>
                <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                <span class="badge badge-pill badge-warning">2.Your tutorial will be verified by an authenticated person and it would be published.</span></div>';
                echo' <h3 class="pb-2 display-5">Content verification details</h3>';
                    $res_cont = mysqli_query($con,"SELECT links,isverified FROM content where cname='$course'") or die('Error');
                        echo  '<div class="container-fluid">
                        <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th><center>isverified</center></th>
                                <th><center>link</center></th>
                            </tr>
                        </thead>';
                      while($row = mysqli_fetch_array($res_cont)) 
                        {
                            $link = $row['links'];
                            $isver=$row['isverified'];
                            echo '<tbody><tr><td><center>'.$isver.'</center></td><td><center>'.$link.'</center>
                            </tr></tbody>';
                        }
                        echo '</table></div></div>';
                }
              ?>  
            <?php if(@$_GET['q']==5){
                echo'<form action="adm_index.php?q=9" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="au-task__item-inner">    
                <div class="row form-group">
                <input type="hidden" name="cname" id="cname" value="'.$course.'">
                <hr></br>
                <h4>Create Questions (select particular assement and declare the no of questions )</h4></br></br>
                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Assment no.</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="ass_no" name="ass_no" placeholder="Text" class="form-control">
                        </div>  
                </div>
                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">No. questions in the assement</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="maxval" name="maxval" placeholder="Text" class="form-control">
                        </div>  
                <div class="au-task__footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div></div>
                </form>';
            }
            ?>
            <?php if(@$_GET['q']==9){
                $ass=$_POST['ass_no'];
                $cname=$_POST['cname'];
                $max=$_POST['maxval'];  
                echo'<form action="update.php?q=questentry&ass='.$ass.'&cname='.$cname.'&max='.$max.'" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="au-task__item-inner">';
                    for ($i=1;$i<=$max;$i++)
                    {
                    echo'<div class="row form-group">
                         <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label"><h6>'.$i.'.Question</h6></label>
                                </div>
                                <div class="col-12 col-md-9">
                                <textarea name="ta'.$i.'" id="ta'.$i.'" rows="3" cols="9" placeholder="Content..." class="form-control"></textarea>
                                 </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">option1</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="op1'.$i.'" name="op1'.$i.'" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">option2</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="op2'.$i.'" name="op2'.$i.'" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">option3</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="op3'.$i.'" name="op3'.$i.'" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">option4</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="op4'.$i.'" name="op4'.$i.'" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Correct option</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="cor'.$i.'" id="cor'.$i.'" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option1</option>
                            <option value="2">Option2</option>
                            <option value="3">Option3</option>
                            <option value="4">Option4</option>
                            </select>                        
                         </div>
                    </div>';
                }
                    echo'<br/></br>
                    <div class="au-task__footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    </div>
                    </div>
                    </form>';
                }
            ?>
    <?php if(@$_GET['q']==10)
        {
            echo'<form action="adm_index.php?q=12" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="au-task__item-inner"> 
            <div class="row form-group">
            <div class="col col-md-3">
            <label for="select-input" class=" form-control-label">  Select Name:</label>
            </div>
              <div class="col-6 col-md-3">
              <select name="nom" id="nom" class="form-control">
                    <option value="NULL">Please select</option>';
                      $q3=mysqli_query($con,"SELECT DISTINCT(name) FROM submission where cname='$course'");      
                      while($row=mysqli_fetch_array($q3) )
                      {
                        $names=$row['name'];
                        echo'<option value="'.$names.'">&nbsp;'.$names.'<br />';
                      }
                      echo'</select></div>
                      <div class="col-3 col-md-3">
              <select name="key" id="key" class="form-control">
                    <option value="1">key1</option>
                    <option value="2">key2</option>
                    <option value="3">key3</option>
                    </select>
                    </div>
                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Show
                </button></div></div></form>
                ';
        }
        ?>

        <?php if(@$_GET['q']==12)
        {
            $nom=$_POST['nom'];
            $id=$_POST['key'];
            $q5=mysqli_query($con,"SELECT links FROM submission where name='$nom'");
            $i=1;   
            $keys=array();   
            $keys=['5e49384ae6e2f3839ea3a880afd26aa38fc8341bf02a5','5e4938613f9cdc8db03cc75a017f3017f8011297b1032','5e49387683c77aecd371fb8eff488c4573b08b78754eb'];
            while($row=mysqli_fetch_array($q5) )
            {  $link=$row['links'];
                if(number_format($id)==1)
                {$url='http://api.linkpreview.net/?key='.$keys[0].'&q='.$link.'';}
                if(number_format($id)==2)
                {$url='http://api.linkpreview.net/?key='.$keys[1].'&q='.$link.'';}
                if(number_format($id)==3)
                {$url='http://api.linkpreview.net/?key='.$keys[2].'&q='.$link.'';}
              $ch = curl_init($url);
              curl_setopt($ch, CURLOPT_HEADER, 0);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
              $response = curl_exec($ch);
              curl_close($ch);
              $data=json_decode($response);
              echo'<div><h3> Submission('.$i.')</h3><br>
                        <div>
                        <img src="'.$data->image.'"  width="700" height="700"/>
                        </div>
                        </div><br>';$i++;
            }
    }
        ?>
        
<?php if(@$_GET['q']==6)
        {
            echo'<div class="typo-headers">
            <h3 class="pb-2 display-5">Student details</h3>';
            $result = mysqli_query($con,"SELECT * FROM user where cname='$course'") or die('Error');
                echo  '<div class="container-fluid">
                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th><center>Name</center></th>
                        <th><center>Score</center></th>
                        <th><center>Course ID</center></th>
                        <th><center>Add marks</center></th>
                        <th><center> 
                    </tr>
                </thead>';
                while($row = mysqli_fetch_array($result)) 
                {
                    $name = $row['name'];
                    $score = $row['score'];
                    $cname=$row['cname'];
                    echo '<form action="update.php?q=updatemarks&name='.$name.'&cname='.$cname.'" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <tbody><tr><td><center>'.$name.'</center></td><td><center>'.$score.'</center></td><td><center>'.$cname.'</center><td><center>
                    <input type="number" name="upmark" class="form-control">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button></center></td>
                    </tr></tbody></form>';
                }
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
