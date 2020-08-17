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
    height: 400px;
    width: 100%;
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
<!-- contact -->        
      <!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->

<!-- contact -->
<section class="mail pt-lg-5 pt-4">
	<div class="container pt-lg-5">
		<h2 class="heading text-center mb-sm-5 mb-4">Contact Us </h2>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
				<form action="#" method="post">
					<div class="row">
						<div class="col-md-6 wthree_contact_left_grid pr-md-0">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="">
							</div>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<div class="form-group">
								<input type="text" name="phone number" class="form-control" placeholder="Phone Number" required="">
							</div>
							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" placeholder="Message" class="form-control" required=""></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="submit-buttons">
								<button type="submit" class="btn" style="height: 50px">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4 contact-info">
				<h4 class="mb-4">Address Information</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>64d canal street TT 3356 <span>Newyork, NY.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span>Phone : +1 123 456 789 </p>
				<p><span class="fa mr-2 fa-envelope"></span>Email : <a href="mailto:info@example.com">info@example.com</a></p>
				
				<h4 class="my-4">Book Your Table</h4>
				<p class="phone"><span class="fa mr-2 fa-phone"></span>Call us at +1 123 456 789 </p>
                
                <h4 class="my-4">Live Chat</h4>
				<span style="padding-right: 10px; color: #e6c336" class="fas fa-comments"></span>For Live Chat <a href="chat.html">ClickHere</a>
			</div>
		</div>
	</div>
	<div class="map mt-5">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50996.31320435244!2d-122.06676498187694!3d36.97949802442312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e441b7c36d549%3A0x52ca104b2ad7f985!2sSanta+Cruz%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1469096018666"
			style="border:0"></iframe>
	</div>
</section>
<!-- //contact -->

        
       
<?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/copyright.php");
?>