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
        
        <!-- gallery -->
        <!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->

<!-- gallery -->
<section class="gallery py-5" id="gallery">
	<div class="container py-lg-5">
		<h2 class="heading text-center mb-sm-5 mb-4">Gallery</h2>
		<div class="row news-grids text-center">
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal1"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal2"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal3"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal4"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal5"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal6"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal1"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal2"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal3"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal4"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal5"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a href="#gal6"><img src="src/img/banner.png" alt="portfolio image" class="img-fluid"></a>
			</div>
		</div>

		<!-- popup1 -->
		<div id="gal1" class="pop-overlay">
			<div class="popup">
				<img src="src/img/banner.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup1 -->
		<!-- popup2 -->
		<div id="gal2" class="pop-overlay">
			<div class="popup">
				<img src="src/img/banner.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup2 -->
		<!-- popup3 -->
		<div id="gal3" class="pop-overlay">
			<div class="popup">
				<img src="src/img/banner.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup3 -->
		<!-- popup4 -->
		<div id="gal4" class="pop-overlay">
			<div class="popup">
				<img src="src/img/banner.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup4 -->
		<!-- popup5 -->
		<div id="gal5" class="pop-overlay">
			<div class="popup">
				<img src="src/img/banner.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup5 -->
		<!-- popup6 -->
		<div id="gal6" class="pop-overlay">
			<div class="popup">
				<img src="src/img/banner.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup6 -->

	</div>
</section>
<!-- //gallery -->
        
        <?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/copyright.php");
?>
