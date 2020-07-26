<?php
include('connection.php');
  $phname=$phid=$phpass=$phdegree=$phsub="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $phname=$_POST['phname'];
  $phid=$_POST['phid'];
  $phpass=$_POST['phpass'];
  $phdegree=$_POST['phdegree'];
  $phsub=$_POST['phsub'];

  if (empty($_POST["phname"])) {
    echo "Please enter phname";
  }
  else {
    $docname=$_POST['phname'];
  }
   if (empty($_POST["phid"])) {
    echo "Please enter phid";
  }
  else {
    $phid=$_POST['phid'];
  }
    if (empty($_POST["phpass"])) {
    echo "Please enter phpass";
  }
  else {
    $phpass=$_POST['phpass'];
  }
  if (empty($_POST["phdegree"])) {
    echo "Please enter phdegree";
  }
  else {
    $phdegree=$_POST['phdegree'];
  }

  if(isset($_POST['phsub'])){
    $phname=$_POST['phname'];
  $phid=$_POST['phid'];
  $phpass=$_POST['phpass'];
  $docpass=$_POST['phdegree'];
    $sql = "INSERT INTO pharmacist VALUES('$phname','$phid','$phpass','$phdegree')";
    //$result = mysqli_query($con1,$sql);
    if( !mysqli_query($con1,$sql) )
      { echo"not inserted";}
    else
      {
        function redirect($url) {
     ob_start();
     header('Location: '.$url);
     ob_end_flush();
     die();
    }
   redirect('admin.php');
      }
  }

}
?>

