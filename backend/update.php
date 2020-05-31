<?php
  include_once 'database.php';
  session_start();
  $email=$_SESSION['email'];
  if(@$_GET['q']=='studententry') 
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $college=$_POST['college'];
    $pass=$_POST['password'];
    $pass1=$_POST['password1'];
    $cname=$_POST['cname'];
    if($pass==$pass1){
    $str="insert into user set name='$name',email='$email',password='$pass',college='$college',cname='$cname',score=0";
    $inj1="insert into tracking set name='$name',cname='$cname',no_quiz=0,no_working=0";
    if((mysqli_query($con,$str)))	
    $exe1=mysqli_query($con,$inj1) or die('Error');
    header('location: mas_index.php?q=7');
     }
     else{header('location: mas_index.php?q=8');}
   }

   if(@$_GET['q']=='adminentry') 
   {
     $email=$_POST['email'];
     $pass=$_POST['password'];
     $pass1=$_POST['password1'];
     $cname=$_POST['cname'];
     if($pass==$pass1){
     $admstr="insert into admin set email='$email',password='$pass',course='$cname'";
     if((mysqli_query($con,$admstr)))	
     header('location: mas_index.php?q=7');
     }
     else{header('location: mas_index.php?q=8');}
    }
 
  if(@$_GET['q']=='courseentry') 
    {
      $cname=$_POST['cname'];
      $cno=$_POST['cno'];
      $dur=$_POST['dur'];
      $desc=$_POST['cdesc'];
      $fee=$_POST['fee'];

      $str="insert into course set cname='$cname',cno='$cno',dur='$dur',description='$desc',fees='$fee'";
    if((mysqli_query($con,$str)))	
    {
      $inj="CREATE TABLE $cname (ass_no int,question text,op1 varchar(255),op2 varchar(255),op3 varchar(255),op4 varchar(255),cor_op varchar(30))";
      if((mysqli_query($con,$inj))){
      header('location: mas_index.php?q=7');}
    else{header('location: mas_index.php?q=8');}
    }
  }

  if(@$_GET['q']=='questentry') 
    {
      $ass=@$_GET['ass'];
      $cname=@$_GET['cname'];
      $max=@$_GET['max'];
      for ($i=1;$i<=$max;$i++)
      {
      $ta=$_POST['ta'.$i];
      $op1=$_POST['op1'.$i];
      $op2=$_POST['op2'.$i];
      $op3=$_POST['op3'.$i];
      $op4=$_POST['op4'.$i];
      $cor=$_POST['cor'.$i];
      $str1="insert into $cname set ass_no='$ass',question='$ta',op1='$op1',op4='$op4',op2='$op2',op3='$op3',cor_op='$cor'";
      $exe=mysqli_query($con,$str1) or die('Error');
      }
        header('location: adm_index.php?q=7');
    }

    if(@$_GET['q']=='updatemarks') 
    {
      $name=@$_GET['name'];
      $cname=@$_GET['cname'];
      $upm=$_POST['upmark'];
      $upm=number_format($upm);
      $str2="UPDATE user set score=(score+'$upm') where name='$name' and cname='$cname'";
      if((mysqli_query($con,$str2)))	
      {
        header('location: adm_index.php?q=7');}
        else{echo $upm,$name;
          //header('location: adm_index.php?q=8');
        }
    }

    if(@$_GET['q']=='markentry')
    { $name=@$_GET['name'];
      $cname=@$_GET['cname'];
      $ass=@$_GET['ass'];
      $str3=mysqli_query($con,"select cor_op from $cname where ass_no=$ass");
      $corr=array();
      $data=array();
      $max=0;
      while($row=mysqli_fetch_array($str3))
        {
          $corr[]=number_format($row['cor_op']);
          $max++;
        }
        for($i=1;$i<=$max;$i++){
          $data[]=number_format($_POST['da'.$i]);
        }
        $result = array_intersect_assoc($corr,$data);
        $count=count($result);
        $scr=$count*5;
        $scr=number_format($scr);
        $str4="UPDATE user set score=(score+$scr) where name='$name' and cname='$cname'";
      if((mysqli_query($con,$str4)))	
      {
        $ent="update tracking set no_quiz=no_quiz+1 where name='$name'";
        $exe1=mysqli_query($con,$ent) or die('Error');
        header('location: stu_index.php?q=8&mark='.$scr.'');
      }
        else{header('location: stu_index.php?q=9');}
      }

    if(@$_GET['q']=='upimage')
      { $name=@$_GET['name'];
        $cname=@$_GET['cname'];
        $ass=$_POST['req'];
        $img=$_POST['imgid'];
        $image="insert into submission set name='$name',links='$img',cname='$cname'";
        if((mysqli_query($con,$image))){
          $ent1="update tracking set no_working=no_working+1 where name='$name'";
          $exe2=mysqli_query($con,$ent1) or die('Error');
          header('location: stu_index.php?q=10');}
        else{header('location: stu_index.php?q=9');}
      }

      if(@$_GET['q']=='upcont')
      {
        $cname=$_POST['cname'];
        $cont=$_POST['contid'];
        $int="insert into content set cname='$cname',links='$cont',isverified='No'";
        if((mysqli_query($con,$int)))	
        {
          header('location: adm_index.php?q=7');}
        else{header('location: adm_index.php?q=8');}
      }

    if(@$_GET['q']=='delstu') 
    {
      $nam=$_POST['nam'];
      $str3="delete from user where name='$nam'";
      if((mysqli_query($con,$str3)))	
      {
        $inner="delete from tracking where name='$nam'";
        $ininner="delete from submission where name='$nam'";
        $execute=mysqli_query($con,$inner) or die('Error');
        $execute11=mysqli_query($con,$ininner) or die('Error');
        header('location: adm_index.php?q=7');}
        else{header('location: adm_index.php?q=8');}
    }

    if(@$_GET['q']=='delstu1') 
    {
      $nam=$_POST['nam'];
      $str3="delete from user where name='$nam'";
      if((mysqli_query($con,$str3)))	
      {
        $inner="delete from tracking where name='$nam'";
        $ininner="delete from submission where name='$nam'";
        $execute=mysqli_query($con,$inner) or die('Error');
        $execute11=mysqli_query($con,$ininner) or die('Error');
        header('location: mas_index.php?q=7');}
        else{header('location: mas_index.php?q=8');}
    }

    if(@$_GET['q']=='delcou')
    {
      $nam=$_POST['nam'];
      $str4="delete from course where cname='$nam'";
      if((mysqli_query($con,$str4)))	
      {
        header('location: mas_index.php?q=7');}
        else{header('location: mas_index.php?q=8');}
    }

    if(@$_GET['q']=='upadmin')
    { $id=$_POST['id'];
      $pass=$_POST['pass'];
      $str4="update admin set password='$pass' where email='$id'";
      if((mysqli_query($con,$str4)))	
      {
        header('location: mas_index.php?q=7');}
        else{header('location: mas_index.php?q=8');}
    }

    if(@$_GET['q']=='verify')
    { $det=$_POST['reqver'];
      $link=$_POST['reqlin'];
      if(isset($_POST['remove']))
      {
      $qut1="delete from content where links='$link'";
      if((mysqli_query($con,$qut1)))	
      {
        header('location: mas_index.php?q=7');}
        else{header('location: mas_index.php?q=8');}
      }
      $qut="update content set isverified='Yes' where links='$link'";
      if((mysqli_query($con,$qut)))	
      {
        header('location: mas_index.php?q=7');}
        else{header('location: mas_index.php?q=8');}
    }

    if(@$_GET['q']=='enroll')
    {$fname=$_POST['fullname'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $clg=$_POST['college'];
      $cn=$_POST['cname'];
      $phno=$_POST['phno'];
      $date=$_POST['date'];
      $enroll="insert into user_enrolled set full_name='$fname',college='$clg',email='$email',password='$pass',course='$cn',phone_number='$phno',date='$date'";
      if((mysqli_query($con,$enroll)))	
        {
        header('location: payment.php?q=pay&cname='.$cn.'&name='.$fname.'&email='.$email.'&phno='.$phno.'');}
        else{header('location: subscribe.php?q=12');}
    }

?>