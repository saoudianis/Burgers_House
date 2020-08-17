<?php
//head
include("src/php/head.php");
?>
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
        
 <!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->
        
   <!-- Chefs -->
<section class="trainers py-5">
	<div class="container py-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Our Chefs </h3>
		 <div class="row team_grids mt-5">
			<div class="col-lg-3 col-sm-6">
				<div class="team-member">
					<div class="team-img">
						<img src="src/img/banner.png" alt="team member" class="img-fluid">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>Cook Master</h4>
							<p>estibulum ac diam sit amet quam.</p>
						</div>
						<div class="s-link">
							<a href="#">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="team-title">
					<h5>Charlotte Olivia</h5>
					<span>Cook Master</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 my-sm-0 mt-5">
				<div class="team-member">
					<div class="team-img">
						<img src="src/img/banner.png" alt="team member" class="img-fluid">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>Cook Master</h4>
							<p>estibulum ac diam sit amet quam.</p>
						</div>
						<div class="s-link">
							<a href="#">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="team-title">
					<h5>Mathew Elijah</h5>
					<span>Cook Master</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mx-auto my-lg-0 mt-5">
				<div class="team-member">
					<div class="team-img">
						<img src="src/img/banner.png" alt="team member" class="img-fluid">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>Cook Master</h4>
							<p>estibulum ac diam sit amet quam.</p>
						</div>
						<div class="s-link">
							<a href="#">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="team-title">
					<h5>Alexander Lucas</h5>
					<span>Cook Master</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mx-auto my-lg-0 mt-5">
				<div class="team-member">
					<div class="team-img">
						<img src="src/img/banner.png" alt="team member" class="img-fluid">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>Cook Master</h4>
							<p>estibulum ac diam sit amet quam.</p>
						</div>
						<div class="s-link">
							<a href="#">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="team-title">
					<h5>Linda Anderson</h5>
					<span>Cook Master</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Chefs -->
     
        
       <?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/copyright.php");
?>
