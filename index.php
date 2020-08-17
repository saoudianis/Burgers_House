<?php
session_start();
$id = $_SESSION['id'];
if(isset($id)){
    
    header("location:store.php");
}
//head
include("src/php/head.php");
?>
</head>
<body>
   <?php
    //topheader
include("src/php/topheader.php");
    //header
    include("src/php/header.php");
?> 
    
<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-agile">
				<div class="row">
					<div class="col-lg-6 p-0">
						<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Delicious & crispy</span> Burgers.</h3>
										<p class="w3ls_pvt-title my-3">No Matter Where You Are , Home or Work ... We Will Find You And Give You Your Burger</p>
										<a href="login.php" class="btn btn-banner my-sm-3 mb-3">LogIn</a>
										<a href="register.php" class="btn btn-banner1 my-sm-3 mb-3">Register</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Tasty and healthy</span> Food</h3>
										<p class="w3ls_pvt-title my-3">Try Now The Most Tasty And Healthy Burgers In this City</p>
										<a href="about.php" class="btn btn-banner my-sm-3 mb-3">Read More</a>
										<a href="contact.php" class="btn btn-banner1 my-sm-3 mb-3">Contact Us</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>More Than 30y of</span> Experience</h3>
										<p class="w3ls_pvt-title my-3">See The Gallery Of OurWork</p>
										<a href="about.php" class="btn btn-banner my-sm-3 mb-3">Gallery</a>
										<a href="contact.php" class="btn btn-banner1 my-sm-3 mb-3">Contact Us</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->

					</div>
					<div class="col-lg-6 col-md-8 mt-lg-0 mt-5">
						<img src="src/img/banner.png" alt="" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
        
<!-- services -->
<section class="services py-5">
	<div class="container py-lg-5">
		<h3 class="heading text-center mb-sm-5 mb-4">What we do </h3>
		<div class="row offer-grids">
			<div class="col-lg-4 col-md-6">
				<div class="ser1">
					<div class="bg-layer">
						<h4 class="">Service1</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
				<div class="ser2">
					<div class="bg-layer">
						<h4 class="">Service2</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
				<div class="ser3">
					<div class="bg-layer">
						<h4 class="">Service3</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->	

<?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/copyright.php");
?>