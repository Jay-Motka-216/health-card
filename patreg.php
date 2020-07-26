<?php
include('connection.php');
  $patname=$patid=$blgrp=$dob=$gender=$patpass=$patsub="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $patname=$_POST['patname'];
  $patid=$_POST['patid'];
  $patpass=$_POST['patpass'];
  $blgrp=$_POST['blgrp'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $patsub=$_POST['patsub'];

  if (empty($_POST["patname"])) {
    echo "Please enter patname";
  }
  else {
    $patname=$_POST['patname'];
  }
   if (empty($_POST["patid"])) {
    echo "Please enter patid";
  }
  else {
    $patid=$_POST['patid'];
  }
    if (empty($_POST["blgrp"])) {
    echo "Please enter blgrp";
  }
  else {
    $blgrp=$_POST['blgrp'];
  }
    if (empty($_POST["dob"])) {
    echo "Please enter dob";
  }
  else {
    $dob=$_POST['dob'];
  }
  if (empty($_POST["gender"])) {
    echo "Please enter gender";
  }
  else {
    $gender=$_POST['gender'];
  }
    if (empty($_POST["patpass"])) {
    echo "Please enter patpass";
  }
  else {
    $patpass=$_POST['patpass'];
  }
  if (empty($_POST["patsub"])) {
    echo "Please enter patsub";
  }
  else {
    $patsub=$_POST['patsub'];
  }

  if(isset($_POST['patsub'])){
    $patname=$_POST['patname'];
    $patid=$_POST['patid'];
    $blgrp=$_POST['blgrp'];
    $patpass=$_POST['patpass'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $sql = "INSERT INTO patient VALUES('$patname','$patid','$patpass','$blgrp','$dob','$gender')";
    //$result = mysqli_query($con1,$sql);
    if( !mysqli_query($con1,$sql) )
      { echo"not inserted";}
    else
      { function redirect($url) {
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

