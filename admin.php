<?php
         include ("connection.php");
          $con = mysqli_connect('127.0.0.1','root','');
          mysqli_select_db($con,"hcard");           
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-2 bg-black top">
    	<div class="container">
			<h1 align="center"><b>Health Card</b></h1>
    		
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	     <ul class="navbar-nav nav ml-auto">
	         <!--li class="nav-item"><a href="home.php" class="nav-link"><span>HOME</span></a></li>
	    		 <li class="nav-item"><a href="#" onclick="return alle_call();" class="nav-link"><span>ALLERGIES</span></a></li-->
	         <li class="nav-item"><a href="#" class="nav-link"><span>ADMINISTRATOR</span></a></li>
	          
	          
			  </ul>
			
	      

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-5 pt-9 ftco-animate">
			  
									
          	<div class="mt-5">
                <a href="#docModal" data-toggle="modal" class="btn btn-primary">Doctor Registration</a>
                <a href="#patModal" data-toggle="modal" class="btn btn-primary" style="margin-left: 42px">Patient Registration</a><br><br>  
                <a href="#phModal" data-toggle="modal" class="btn btn-primary">Pharmacist Registration</a>
                <a href="#labModal" data-toggle="modal" class="btn btn-primary">Lab Technitian Registration</a>
             </div>           
             
            </div>
				 
			   
          </div>
        </div>
      </div>
         

<!-- Doc Registration -->
<div class="modal fade" id="docModal">
<div class="modal-dialog modal-sm">   <!-- modal-sm   modal-lg -->
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"></h4>
</div>
<div class="modal-body">
<h3>Registration Form</h3>

<form method="post" action="docreg.php">
<label>DOCTOR NAME : </label>
<input type="text" class="form-control" name="docname" required>
<label>DEGREE : </label>
<input type="text" class="form-control" name="docdegree" required>
<label>DOCTOR ID : </label>
<input type="text" class="form-control" name="docid" required>
<label>HOSPITAL : </label>
<input type="text" class="form-control" name="hosp" required>
<label>DOCPassword : </label>
<input type="Password" class="form-control" name="docpass" required>

<input type="submit" class="btn btn-primary" name="docsub">
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- Pat Registration -->
<div class="modal fade" id="patModal">
<div class="modal-dialog modal-sm">   <!-- modal-sm   modal-lg -->
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"></h4>
</div>
<div class="modal-body">
<h3>Registration Form</h3>

<form method="post" action="patreg.php">
<label>Patient NAME : </label>
<input type="text" class="form-control" name="patname" required>
<label>Patient ID : </label>
<input type="text" class="form-control" name="patid" required>
<label>Password : </label>
<input type="Password" class="form-control" name="patpass" required>
<label>Bloud Group : </label>
<input type="text" class="form-control" name="blgrp" required>
<label>Date Of Birth : </label>
<input type="date" class="form-control" name="dob" required>
<label>Gender : </label>
<input type="text" class="form-control" name="gender" required>

<input type="submit" class="btn btn-primary" name="patsub">
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- pharma Registration -->
<div class="modal fade" id="phModal">
<div class="modal-dialog modal-sm">   <!-- modal-sm   modal-lg -->
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"></h4>
</div>
<div class="modal-body">
<h3>Registration Form</h3>

<form method="post" action="phreg.php">
<label>Pharmacist NAME : </label>
<input type="text" class="form-control" name="phname" required>
<label>Pharmacist ID : </label>
<input type="text" class="form-control" name="phid" required>
<label>Password : </label>
<input type="Password" class="form-control" name="phpass" required>
<label>DEGREE : </label>
<input type="text" class="form-control" name="phdegree" required>

<input type="submit" class="btn btn-primary" name="phsub">
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- Lab Registration -->
<div class="modal fade" id="labModal">
<div class="modal-dialog modal-sm">   <!-- modal-sm   modal-lg -->
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"></h4>
</div>
<div class="modal-body">
<h3>Registration Form</h3>

<form method="post" action="labreg.php">
<label>Lab Technitian NAME : </label>
<input type="text" class="form-control" name="labname" required>
<label>Lab Technitian ID : </label>
<input type="text" class="form-control" name="labid" required>
<label>Password : </label>
<input type="Password" class="form-control" name="labpass" required>

<input type="submit" class="btn btn-primary" name="labsub">
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
    </section>

	



   

    <footer class="ftco-footer ftco-section img" style="background-image: url(images/footer-bg.jpg);">
    	<div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Mediplus</h2>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Emergency Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Outdoors Checkup</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>24 Hours Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>