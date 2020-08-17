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
session_start();
include("src/php/functions/connect.php");


       //check the validity of the email
if($_POST['submit']=="Register"){
    if(!$_POST['email']) $error.="<br />please enter your email";
    
    else if (!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) $error.="<br />please enter a valid email";
    
     if(!$_POST['password']) $error.="<br />please enter your password";
    
    if(!$_POST['username']) $error.="<br />please enter your username";
    
    if(!$_POST['phone']) $error.="<br />please enter your phone number";
    
    if(!$_POST['pin']) $error.="<br />please enter your Location Pin";
    //Check the validite of PassWord
    else {
        if(strlen($_POST['password'])<8) $error.="<br />please enter at least 8 caracters password";
        
        if(!preg_match('`[A-Z]`', $_POST['password']))$error.="<br />please enter at least one capital letter in password";
    }
    
    //phone validation
    $phone=$_POST['phone'];
    
    $numberOfDigits = strlen($phone);
    //if number was 10 caracters
    if (!($numberOfDigits == 10)) {
        $error.="<br />please enter 10 caracters in the phone number";}
        //if number was from algerian company
        $company=$phone/100000000;
       if(!($company==05) OR !($company==07) OR !($company==06)){
           $error.="<br />please enter a phone number start with 05,07 or 06";
       } 
    
   
     //Print the Errot If there is an error
    if($error) echo '<div class="alert alert-danger" role="alert" style="padding-top: 80px;
    width: 100%;">
  <h4 class="alert-heading">There is a error</h4>
  <p>' .$error. '</p>
</div>';
    //If there is not a error ...
    else{
        //Connect With the DataBase and Check if the email was reister before in DataBase
        
        $query ="SELECT * FROM `user` WHERE email='".mysqli_real_escape_string($link ,$_POST['email'])."'";
        
        $result= mysqli_query($link, $query);
        $results= mysqli_num_rows($result);
        //Tell the user a message if hisregister before  
        if($results) echo '<div class="alert alert-danger" role="alert" style="padding-top: 80px;
    width: 100%;">
  <h4 class="alert-heading">There is a error</h4>
  <p>that email address is already registered</p>
</div>';
        //If he don't register Before ...
        else {
            $username=$_POST['username'];
            $email=mysqli_real_escape_string($link ,$_POST['email']);
            $phone=$_POST['phone'];
            $pass=$_POST['password'];
            $pin=$_POST['pin'];
            $query="INSERT INTO `user` (`user_id`,`username`,`email`,`phone`, `pass`,`pin`)VALUES(NULL,'$username','$email','$phone','$pass','$pin')";
            mysqli_query($link, $query);
            $_SESSION['id']=mysqli_insert_id($link);
            
            //redirect to login page
            header("location:login.php");
        }
    }
      
      }                     
?>

                
                </div>
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('src/img/login-bg.jpg'); height: 100%;">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="index.php"><img src="src/img/banner.png" style="border-radius: 30px" alt=""></a>
                            </div>
                            
                            
                            
                            <h3>New to Burgers House</h3>
                            <p>Join us today! It takes only few steps</p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="UserName" required="" name="username" >
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" required="" name="email">
                                    <i class="fas fa-at"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" required="" name="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Location Pin" required="" name="pin">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left">
                                        <label>
                                            
                                            <span  style="padding-left: 20px;
    padding-top: 5px">&nbsp;How get it ? <a href="pin.php">ClickHere</a></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <input class="btn btn-banner my-sm-3 mb-3" type="submit" value="Register" style="height: 50px" name="submit">
                                </div>
                            </form>
                            <div class="register">
                                <p>Already have an account? <a href="login.php">Log In</a></p>
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