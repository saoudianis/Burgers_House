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
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('src/img/login-bg.jpg'); height: 100%;">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="index.html"><img src="src/img/banner.png" style="border-radius: 30px" alt=""></a>
                            </div>
                            <h3>Forgot Password</h3>
                            <p>We will send you a link to reset password.</p>
                            <form action="../index.html">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your email address" required="">
                                    <i class="ik ik-mail"></i>
                                </div>
                                <div class="sign-btn text-center">
                                    <input href="about.html" class="btn btn-banner my-sm-3 mb-3" type="submit" value="Submit" style="height: 50px">
                                </div>
                            </form>
                            <div class="register">
                                <p>Not a member? <a href="register.php">Create an account</a></p>
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
