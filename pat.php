<?php
         include ("connection.php");
          $con = mysqli_connect('127.0.0.1','root','');
          mysqli_select_db($con,"hcard");
          session_start();

               function redirect($url){
              ob_start();
              header('Location :'.$url);
              ob_end_flush();
          }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User</title>
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
    <?php   $pa=$_SESSION['userid']; ?>
  </head>
  <script type="text/javascript">
      function breport()
          { 
            var st ='';
            <?php
            $sql= "SELECT doctor.DOCNAME,laboratory.report_type,laboratory.ppbs,laboratory.fpbs,laboratory.date FROM laboratory INNER JOIN doctor ON doctor.DOCLID=laboratory.DOCLID WHERE USERID='170170107055'";
           $result = mysqli_query($con,$sql);
             // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             while ($row = mysqli_fetch_assoc($result)) {
              echo "var javascript_array=".json_encode($row); ?> 
              st=st+"<tr><td>"+javascript_array['DOCNAME']+"</td><td>"+javascript_array['report_type']+"</td><td>"+javascript_array['ppbs']+"</td><td>"+javascript_array['fpbs']+"</td><td>"+javascript_array['date']+"</td></tr>";
             <?php } ?>
             document.getElementById("123").innerHTML="<tr><th>Doctor</th><th>Report</th><th>ppbs</th><th>fpbs</th><th>Date</th></tr>"+st;  
             return;
          }
  </script>
  <script type="text/javascript">
          function on_call()
          {
            var st ='';
            <?php
             $sql= "SELECT doctor.DOCNAME,casedetail.DISEASE,casedetail.Date FROM casedetail INNER JOIN doctor ON doctor.DOCLID=casedetail.DOCLID WHERE USERID='$pa' ORDER BY CASEINDEX DESC";
             $result = mysqli_query($con,$sql);
             while ($row = mysqli_fetch_assoc($result)) {
            echo "var javascript_array=".json_encode($row); ?> 
              st=st+"<tr><td>"+javascript_array['DOCNAME']+"</td><td>"+javascript_array['DISEASE']+"</td><td>"+javascript_array['Date']+"</td></tr>";
             <?php } ?>
            
             document.getElementById("123").innerHTML="<tr><th>Doctor</th><th>Disease</th><th>Date</th></tr>"+st;  
             return;
          }
  </script>
  <script type="text/javascript">
           function alle_call()
          {
            var st ='';
            <?php
             $sql= "SELECT ALLERGY FROM allergies WHERE USERID='$pa' ORDER BY ALINDEX DESC";
             $result = mysqli_query($con,$sql);
             while ($row = mysqli_fetch_assoc($result)) {
            echo "var javascript_array=".json_encode($row); ?> 
              st=st+"<tr><td>"+javascript_array['ALLERGY']+"</td></tr>";
             <?php } ?>
            
             document.getElementById("123").innerHTML="<tr><th>Allergies</th></tr>"+st;  
             return;
          }
          </script>
  <script type="text/javascript">
          function pre_call()
          {
            var st ='';
            <?php
             $sql= "SELECT doctor.DOCNAME,casedetail.PRESCRIPTION,casedetail.Date FROM casedetail INNER JOIN doctor ON doctor.DOCLID=casedetail.DOCLID WHERE USERID='$pa' ORDER BY CASEINDEX DESC";
             $result = mysqli_query($con,$sql);
             while ($row = mysqli_fetch_assoc($result)) {
            echo "var javascript_array=".json_encode($row); ?> 
              st=st+"<tr><td>"+javascript_array['DOCNAME']+"</td><td>"+javascript_array['PRESCRIPTION']+"</td><td>"+javascript_array['Date']+"</td></tr>";
             <?php } ?>
            
             document.getElementById("123").innerHTML="<tr><th>Doctor</th><th>Prescripction</th><th>Date</th></tr>"+st;  
             return;
          } 
          </script>
  <script type="text/javascript">
          function gen_call()
          {
            <?php
             $sql= "SELECT UNAME,USERID,BGRP,DOB,GENDER FROM patient WHERE USERID='$pa'";
             $result = mysqli_query($con,$sql);
             $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             echo "var javascript_array=".json_encode($row); ?>            
            document.getElementById("123").innerHTML="<lable>USER ID: </lable>"+javascript_array['USERID']+"<br><br><lable>USER NAME: </lable>"+javascript_array['UNAME']+"<br><br><lable>BLOUD GROUP: </lable>"+javascript_array['BGRP']+"<br><br><lable>DOB: </lable>"+javascript_array['DOB']+"<br><br><lable>GENDER: </lable>"+javascript_array['GENDER']; 
             return;
          }
    </script>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-2 bg-black top">
    	<div class="container">
			<h1 style="align:center"><b>Health Card</b></h1>
    		
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container" >
	      
	      <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index12.html" onclick="return logout();" class="nav-link"><span>Log Out</span></a></li>
			  <li class="nav-item"><a href="#" onclick="return on_call();" class="nav-link"><span>CASE DETAILS</span></a></li>
	          <li class="nav-item"><a href="#" onclick="return alle_call();" class="nav-link"><span>ALLERGIES</span></a></li>
	          <li class="nav-item"><a href="#" onclick="return breport();" class="nav-link"><span>BODY REPORT</span></a></li>
	          <li class="nav-item"><a href="#" onclick="return pre_call();" class="nav-link"><span>PRESCRIPTION</span></a></li>
  	          <li class="nav-item"><a href="#" onclick="return gen_call();" class="nav-link"><span>GENERAL DETAILS</span></a></li>
			  
	      
	          
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
			  <form method="post" enctype="multipart/form-data" class="colorlib-form" style="background-color: rgba(21,21,21,0.8);">
									
          	<div class="mt-5" style="width: 1100px;">
             <div style="background-color:white;">
            
            <table border=1; style="width: 1100px opacity=0%" id="123">
            <!--p id='321'-->
            </table>
          	</p>	  
            </div>
				  </form>
			   
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

    <script type="text/javascript">
          function logout(){
              <?php 
          if(isset($_SESSION["userid"]))
              {
                unset($_SESSION["userid"]);
              }
              else {
               echo "Error!";
              } ?>
              return;
          }
    </script>
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