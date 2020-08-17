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
    <!-- style -->
<style>
* {
  box-sizing: border-box;
}

.zoom {
  padding: 3px;
  background-color: #e6c336;
  transition: transform .2s;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 
  
}
    .bdy{
        background-color: #212121;
    }
    h1 , h5 ,h3{
        color: #ffffff;
        padding: 5px;
    }
</style>

    
    </head> 
    <body>
        
                <?php
    //topheader
include("src/php/topheader.php");
    //header
    include("src/php/header.php");
?> 
        
        <!-- Get -->
        <div style="margin: 0 auto; padding-top: 90px" class="text-center bdy">
        <h1>How to get your location Pin : </h1>
        <h5>-Fist Open <a href="https://www.google.dz/maps?hl=fr&tab=rl&authuser=0">Google Maps</a>.</h5>
        <h5>-Select your house on Google Maps (The number 1 in the image below).</h5>
        <h5>-You will see your pin copy it (The number 2 in the image below).</h5>
        <div class="container" style="padding-top: 80px">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-6 col-sm-12 text-center" style="padding-bottom: 20px">
     <h3 style="padding-bottom: 20px">The image : </h3>
        <img src="src/img/PC.png" class="img-fluid zoom" style="border-radius: 20%; " alt="mobile">
    </div>
    
  </div>
        </div>
            </div>
        <!-- //Get -->
        
        <?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/copyright.php");
?>