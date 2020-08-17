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
        
            <body>
   <?php
    //topheader
include("src/php/topheader.php");
    //header
    include("src/php/header.php");
?> 

        
        <!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->

<!-- Services -->
<section class="services-inner py-5">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-sm-5 mb-4">Services </h2>
		<div class="row service-grids">
			<div class="row col-lg-6 mb-5 padder-none">
				<div class="col-sm-3 ser_icon">
					<span class="icon bg1 mx-auto">
						<span style="color: white" class="fas fa-globe"></span>
					</span>
				</div>
				<div class="col-sm-9 mt-sm-0 mt-3">
					<h4>Online Order</h4>
					<p class="">Quisque ac sapien quis orci pulvinar finibus quisn eu urna Quisque Suspendisse id felisut sed felise tincidunt finibus.
					Nulla sed justo tellus. Donec et felis ante ipsum urna Quisque sed felis dolor.</p>
				</div>
			</div>
			<div class="row col-lg-6 mb-sm-5 padder-none">
				<div class="col-sm-3 mb-sm-0 mb-4 ser_icon ser-right">
					<span class="icon bg2 mx-auto">
						<span class="fas fa-utensils" style="color: white"></span>
					</span>
				</div>
				<div class="col-sm-9">
					<h4 class=""> Home Delivery</h4>
					<p class="">Quisque ac sapien quis orci pulvinar finibus quisn eu urna Quisque Suspendisse id felisut sed felise tincidunt finibus.
					Nulla sed justo tellus. Donec et felis ante ipsum urna Quisque sed felis dolor.</p>
				</div>
			</div>
			<div class="row col-lg-6 mb-lg-0 mb-5 mt-sm-0 mt-5 padder-none">
				<div class="col-sm-3 mb-sm-0 mb-4 ser_icon">
					<span class="icon bg3 mx-auto">
						<span class="fa fa-lemon-o"></span>
					</span>
				</div>
				<div class="col-sm-9">
					<h4>Low Prices</h4>
					<p class="">Quisque ac sapien quis orci pulvinar finibus quisn eu urna Quisque Suspendisse id felisut sed felise tincidunt finibus.
					Nulla sed justo tellus. Donec et felis ante ipsum urna Quisque sed felis dolor.</p>
				</div>
			</div>
			<div class="row col-lg-6 padder-none">
				<div class="col-sm-3 mb-sm-0 mb-4 ser_icon ser-right">
					<span class="icon bg4 mx-auto">
						<span class="fa fa-glass"></span>
					</span>
				</div>
				<div class="col-sm-9">
					<h4 class="">Always Fresh</h4>
					<p class="">Quisque ac sapien quis orci pulvinar finibus quisn eu urna Quisque Suspendisse id felisut sed felise tincidunt finibus.
					Nulla sed justo tellus. Donec et felis ante ipsum urna Quisque sed felis dolor.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Services -->

<!-- join -->
<section class="join py-5">
	<div class="container py-lg-5 py-sm-3">
		<div class="row join_grids">
			<div class="col-lg-6">
				<img src="src/img/banner.png" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-6">
				<h4 class="mt-4">Book Your Table Today</h4>
				<p class="py-sm-4 py-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed justo tellus. Donec ut felis ante. Quisque ac sapien quis orci pulvinar finibus quis eu urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.</p>
				<p class="pb-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed justo tellus. Donec ut felis ante. Quisque ac sapien quis orci.</p>
				<a class="btn btn-banner text-capitalize" href="contact.html" role="button" style="height: 50px">Call Now</a>
			</div>
		</div>
	</div>
</section>
<!-- //join -->

        
        <?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/copyright.php");
?>