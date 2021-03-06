<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en,ar">
<head>

    <title>Burgers House</title>
    
    <!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="burgers,food,fastfood,eat" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
	
    
    
        <link rel="stylesheet" href="src/css/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="src/css/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="src/css/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="src/css/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="src/css/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="src/css/dist/css/theme.min.css">
        <script src="/src/js/vendor/modernizr-2.8.3.min.js"></script>
    
    <link href="src/css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
    <link href="src/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="src/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="src/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
	<!-- //google fonts -->

    
    </head> 
    <body>
       <?php
    //topheader
include("src/php/topheader.php");
    //header
    include("src/php/header.php");
?> 
        
<!-- form --> 
        <div>
       
        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row bg-white">
                <?php

                    if($_GET["logout"]==1 AND ($_SESSION['id'])){
                        session_destroy();
                        /* If user logout */
                    
                    }
include("src/php/functions/connect.php");
require 'src/php/functions/connect.php';
                    
                    //To Login the user
if($_POST['submit']=="LogIn"){
    
    if(!$_POST['LogEmail']) $error.="<br />please enter your email";
    
    else if (!(filter_var($_POST['LogEmail'], FILTER_VALIDATE_EMAIL))) $error.="<br />please enter a valid email";
    
     if(!$_POST['LogPassword']) $error.="<br />please enter your password";
    
    if(strlen($_POST['LogPassword'])<8) $error.="<br />please enter at least 8 caracters password";
        
        if(!preg_match('`[A-Z]`', $_POST['LogPassword']))$error.="<br />please enter at least one capital letter in password";
    
    if($error) echo '<div class="alert alert-danger" role="alert" style="padding-top: 80px;
    width: 100%;">
  <h4 class="alert-heading">There is a error</h4>
  <p>' .$error. '</p>
</div>';
    
    else{
    $email=mysqli_real_escape_string($link ,$_POST['LogEmail']);
    
    $pass=$_POST['LogPassword'];
    
     $query ="SELECT * FROM `user` WHERE email='".mysqli_real_escape_string($link ,$_POST['LogEmail'])."' AND pass='".$_POST['LogPassword']."' LIMIT 1";
    $result= mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    if($row){
        $_SESSION['id']= $row['user_id'];
        //redirect to logged in page
        header("location:store.php");
    }
    else{
        
        echo '<div class="alert alert-danger" role="alert" style="padding-top: 80px;
    width: 100%;">
  <h4 class="alert-heading">There is a error</h4>
  <p>Please enter a correct information ...</p>
</div>';
        }}
}
                    ?></div>
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('src/img/login-bg.jpg'); height: 100%;">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered" >
                                <a href="index.html"><img src="src/img/banner.png" alt="burgers House" style="border-radius: 30px"></a>
                            </div>
                            <h3>LogIn to Burgers House</h3>
                            <p>Happy to see you again!</p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" required="" name="LogEmail" >
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="" name="LogPassword" >
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        
                                    </div>
                                    <div class="col text-right">
                                        <a href="forgot-password.php">Forgot Password ?</a>
                                    </div>
                                </div>
                                
                                    <input class="btn btn-banner my-sm-3 mb-3" type="submit" name="submit" value="LogIn" style="height: 50px">
                                
                            </form>
                            <div class="register">
                                <p>Don't have an account? <a href="register.php">Create an account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        <!-- //form -->

       <?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/copyright.php");
?>