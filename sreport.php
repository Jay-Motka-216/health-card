<?php
include("connection.php");
session_start();
$ppbs=$fpbs="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $ppbs = $_POST['ppbs'];
  $fpbs = $_POST['ppbs'];
  if (empty($_POST["ppbs"])) {
    echo "Please enter value of ppbs";
  } 
  else {
    $ppbs = $_POST['ppbs'];
  } 
  if (empty($_POST["fpbs"])) {
    echo "fpbs is required";} 
  else {
  $fpbs = $_POST['fpbs'];}
}
$p = $_SESSION["patient"];
if(isset($_POST['submit'])){
$ppbs = "ppbs:".$_POST['ppbs'];
  $fpbs = "fpbs:".$_POST['fpbs'];
  $a = $ppbs.",".$fpbs;
  $b="Sugar Report";
  $c ="null";
	$sql="INSERT INTO laboratory(report_type,report_types,ppbs,fpbs,USERID) VALUES ('$b','$c',$ppbs','$fpbs',$p') ";
	if(!mysqli_query($con1,$sql) )
      { echo"not inserted";}
    else
      { echo "inserted";}
}

?>