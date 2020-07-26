<?php
 include ("connection.php");
          $con = mysqli_connect('127.0.0.1','root','');
          mysqli_select_db($con,"hcard");
          session_start();
          /* function page3($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
  }*/
  function redirect($ur){
    ob_start();
    header('Location:'.$ur);
    ob_end_flush();
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
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
    <script type="text/javascript">

    function call()
    {
      <?php  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid=$_POST['patient-id'];
    $password=$_POST['password'];
    if (empty($_POST['patient-id'])) {
    echo "Please enter patient id";
  } 
  elseif (empty($_POST['password'])) {
    echo "Please enter password";
  }


  $sql = "SELECT USERID,UPASS FROM patient WHERE USERID = '$userid' ";
  $result = mysqli_query($con,$sql);
$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($row1["USERID"] == $userid && $row1["UPASS"] == $password)
    {
      $_SESSION['patient']=$row1["USERID"];
    if($_SESSION["select"]=="Doctor"){
      if(isset($_SESSION['patient']))
      {
        redirect('doc.php');
      }
      else{
        echo "alert('Fail to start session')";
      }
  }
  elseif ($_SESSION["select"]=="Laboratory") {
    
      if(isset($_SESSION['patient']))
      {
        redirect('lab.php');
      }
      else{
        echo "alert('Fail to start session')";
      } 
  }
  elseif($_SESSION["select"]=="Pharmasist"){

      if(isset($_SESSION['patient']))
      {
        redirect('ph.php');
      }
      else{
        echo "alert('Fail to start session')";
      } 
  }
}
}
  ?>
}
    </script>
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
	          <li class="nav-item"><a href="index12.html" onclick="return logout();" class="nav-link"><span>LOG OUT</span></a></li>
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
									
          	<div class="mt-5">
          		  Patient ID : 
				<input id=pat type="text" name="patient-id" required></br>
        Password :
        <input type="password" name="password" required></br>
        <input type="submit" onclick="call();" name="SUBMIT">
                
				 
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

    <script type="text/javascript">
          function logout(){
              <?php 
          if(isset($_SESSION["pharmaid"]))
              {
                unset($_SESSION["pharmaid"]);
              }
              elseif(isset($_SESSION["laboratoryid"])){
               unset($_SESSION["pharmaid"]);   
              }
              else {
               echo "Error!";
              } ?>
              return;
          }
    </script>    
  </body>
</html>