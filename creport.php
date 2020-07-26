<?php
include("connection.php");
session_start();
$hdl=$ldl=$triglycirides="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $hdl = $_POST['hdl'];
  $ldl = $_POST['ldl'];
  $triglycirides = $_POST['triglycirides'];
  if (empty($_POST["hdl"])) {
    echo "Please enter value of hdl";
  } 
  else {
    $hdl = $_POST['hdl'];
  } 
  if (empty($_POST["ldl"])) {
    echo "ldl is required";} 
  else {
  $ldl = $_POST['ldl'];}
   if(empty($_POST["triglycirides"])){
   	echo "enter value of triglycirides";
   }
   else
   {$triglycirides = $_POST['triglycirides'];}
}
$p=$_SESSION["patient"];
if(isset($_POST['submit'])){
$hdl = "hdl:".$_POST['hdl'];
  $ldl = "ldl:".$_POST['ldl'];
  $protine = "triglycirides:".$_POST['triglycirides'];
  $a = $hdl.",".$ldl.",".$triglycirides;
  $b="Cholesterol Report";
	$sql="INSERT INTO laboratory(report_type,report_values) VALUES ('$b','$a') ";
	if( !mysqli_query($con1,$sql) )
      { echo"not inserted";}
    else
      { echo "inserted";}
}

?>