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
</style>

    
    </head> 
    <body>
        
           <?php
    //topheader
include("src/php/topheader.php");
    //header
    include("src/php/header.php");
?> 
        
        <!-- pick -->
        <div class="container" style="padding-top: 80px">
  <div class="row">
    <div class="col-md-6 col-lg-6 col-sm-12">
     <h3 style="padding-bottom: 20px">From your mobile : </h3>
        <a href="pin-m.php"><img src="src/img/pin-M.jpg" class="img-fluid zoom" style="border-radius: 50%" alt="mobile"></a>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12">
      <h3 style="padding-bottom: 20px">From your computer : </h3>
        <a href="pin-c.php"><img src="src/img/pin-C2.png" class="img-fluid zoom" style="border-radius: 50%" alt="computer"></a>
    </div>
  </div>
        </div>
        <!-- //pick -->
        
      <?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/copyright.php");
?>