<?php
          include("connection.php");
          $con = mysqli_connect('127.0.0.1','root','');
          mysqli_select_db($con,"hcard");
          session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="function.php">
    <?php   $pa=$_SESSION["patient"]; ?>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="py-2 bg-black top">
      <div class="container">
      <h1 align="center"><b>Health Card</b></h1>
      </div>
    </div>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark
ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">

      <!--<a class="navbar-brand" href="index.html">Mediplus</a>-->
      <button class="navbar-toggler js-fh5co-nav-toggle
fh5co-nav-toggle" type="button" data-toggle="collapse"
data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="#" onclick="return on_call()" class="nav-link" ><span>CASE DETAILS</span></a></li>
          <li class="nav-item"><a href="#" onclick="return allerg()"class="nav-link"><span>ALLERGIES</span></a></li>
          <li class="nav-item"><a href="#" onclick="return presc()" class="nav-link"><span>PRESCRIPTION</span></a></li>
          <li class="nav-item"><a href="#" onclick="return breport();" class="nav-link" ><span>BODY REPORT</span></a></li>
            <li class="nav-item"><a href="#myModal" data-toggle="modal" class="btn btn-primary">Add New Case</a></li>
            <li class="nav-item"><a href="home1.php" onclick="return logout();" class="nav-link" ><span>HOME</span></a></li>
  </ul>
        </div>
      </div>
    </div>
  </nav>
  <section class="hero-wrap js-fullheight" style="background-image:
url('images/bg_3.jpg');" data-section="home"
data-stellar-background-ratio="0.5">0
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight
align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-5 pt-9 ftco-animate">
  <form method="post" enctype="multipart/form-data"
class="colorlib-form" style="background-color: rgba(21,21,21,0.8);">
          <div class="mt-5" style="width: 1100px;">
             <div style="background-color:white;">
            <table border=1 style="width: 1100px;" id="123">
            <!-- <div style="background-color:white;"  >323</div -->
            </table>
             </div>
            </div>
  </form>
          </div>
        </div>
      </div>
       <div class="modal fade" id="myModal">
<div class="modal-dialog modal-sm">   <!-- modal-sm   modal-lg -->
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title">New Case Details</h4>
</div>
<div class="modal-body">
<h3> New Case</h3>

<form method="POST" action="" enctype="multipart/form-data">
<label>Add Disease : </label>
<input type="text" class="form-control" name="disease" required>

<label>Add Prescription : </label>
<input type="text" class="form-control" name="prescription" required>
<input type="submit" class="btn btn-primary" name="submit">
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">Close</button>
</div>
</div>
</div>

</div>
<?php
  $Disease=$Prescription=$result="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $Disease=$_POST['disease'];
  $Prescription=$_POST['prescription'];
  if (empty($_POST["disease"])) {
    echo "Please enter disease";
  }
  else {
    $Disease=$_POST['disease'];
  }
  if (empty($_POST["prescription"])) {
    echo "password is required";}
  else {
    $Prescription=$_POST['prescription'];
  }
  $date=date("Y/m/d");
  $do=$_SESSION["doclid"];
  if(isset($_POST['submit'])){
    $Disease=$_POST['disease'];
    $Prescription=$_POST['prescription'];
    $sql = "INSERT INTO casedetail(DISEASE,DOCLID,USERID,PRESCRIPTION,Date) VALUES
('$Disease','$do','$pa1','$Prescription','$date') ";
    //$result = mysqli_query($con1,$sql);
    if( !mysqli_query($con,$sql) )
      { echo"not inserted";}
    else
      { echo "inserted";}
  }

}
?>
    </section>

    <footer class="ftco-footer ftco-section img"
style="background-image: url(images/footer-bg.jpg);">
    <div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Mediplus</h2>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span
class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span
class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span
class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right
mr-2"></span>Emergency Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right
mr-2"></span>Qualified Doctors</a></li>
                <li><a href="#"><span class="icon-long-arrow-right
mr-2"></span>Outdoors Checkup</a></li>
                <li><a href="#"><span class="icon-long-arrow-right
mr-2"></span>24 Hours Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span
class="text">203 Fake St. Mountain View, San Francisco, California,
USA</span></li>
                <li><a href="#"><span class="icon
icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope
pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular"
width="48px" height="48px"><circle class="path-bg" cx="24" cy="24"
r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle
class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  
<script type="text/javascript">
          
          function on_call()
          { 
            var st='';
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
        function breport()
          { 
            document.getElementById("123").innerHTML="<h1>Hello</h1>";
            var st ='';
            <?php
            $sql=  "SELECT doctor.DOCNAME,laboratory.report_types,laboratory.ppbs,laboratory.fpbs,laboratory.date FROM laboratory INNER JOIN doctor ON doctor.DOCLID=laboratory.DOCLID WHERE USERID='$pa'";
               $result = mysqli_query($con,$sql);
               while ($row = mysqli_fetch_assoc($result)) {
               echo "var javascript_array1=".json_encode($row); ?> 
               st=st+"<tr><td>"+javascript_array1['DOCNAME']+"</td><td>"+javascript_array1['report_types']+"</td><td>"+javascript_array1['ppbs']+"</td><td>"+javascript_array1['fpbs']+"</td><td>"+javascript_array1['date']+"</td></tr>";
              <?php } ?>
              document.getElementById("123").innerHTML="<tr><th>Doctor</th><th>Report</th><th>ppbs</th><th>fpbs</th><th>Date</th></tr>"+st;  
              return;
          }
</script>
<script type="text/javascript">
          function allerg()
          {
            var st='';
            <?php
             $sql= "SELECT ALLERGY FROM allergies WHERE USERID='$pa' ORDER BY ALINDEX DESC";
           $result = mysqli_query($con,$sql);
             while ($row = mysqli_fetch_assoc($result)) {
              echo "var javascript_array2=".json_encode($row); ?> 
              st=st+"<tr><td>"+javascript_array2['ALLERGY']+"</td></tr>";
             <?php } ?>
             document.getElementById("123").innerHTML="<tr><th>Allergies</th></tr>"+st;  
             return;
          }
</script>
<script type="text/javascript">
          function presc()
          { 
            var st ='';
            <?php
             $sql= "SELECT doctor.DOCNAME,casedetail.PRESCRIPTION,casedetail.Date FROM casedetail INNER JOIN doctor ON doctor.DOCLID=casedetail.DOCLID WHERE USERID='$pa' ORDER BY CASEINDEX DESC";
           $result = mysqli_query($con,$sql);
             while ($row = mysqli_fetch_assoc($result)) {
              echo "var javascript_array3=".json_encode($row); ?> 
               st=st+"<tr><td>"+javascript_array3['DOCNAME']+"</td><td>"+javascript_array3['PRESCRIPTION']+"</td><td>"+javascript_array3['Date']+"</td></tr>";
             <?php } ?>
              document.getElementById("123").innerHTML="<tr><th>Doctor</th><th>Prescription</th><th>Date</th></tr>"+st;  
             return;
          }
</script>
    <script type="text/javascript">
          function logout(){
              <?php 
          if(isset($_SESSION["patient"]))
              {
                unset($_SESSION["patient"]);
              }
              else {
               echo "Error!";
              } ?>
              return;
          }
    </script>
</html>