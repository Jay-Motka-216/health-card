<?php
include ("connection.php");
session_start();
$glucose=$pH=$protine="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $glucose = $_POST['glucose'];
  $pH = $_POST['pH'];
  $protine = $_POST['protine'];
  if (empty($_POST["glucose"])) {
    echo "Please enter value of glucose";
  } 
  else {
    $glucose = $_POST['glucose'];
  } 
  if (empty($_POST["pH"])) {
    echo "ph is required";} 
  else {
  $ph = $_POST['pH'];}
   if(empty($_POST["protine"])){
   	echo "enter value of protine";
   }
   else
   {$protine = $_POST['protine'];}
}
$p=$_SESSION["patient"];
if(isset($_POST['submit'])){
$glucose = "glucose:".$_POST['glucose'];
  $pH = "pH:".$_POST['pH'];
  $protine = "protine:".$_POST['protine'];
  $a = $glucose.",".$pH.",".$protine;
  $b="Urine Report";
	$sql="INSERT INTO laboratory(report_type,report_values,USEERID) VALUES ('$b','$a','$p') ";
	if( !mysqli_query($con1,$sql) )
      { echo"not inserted";}
    else
      { echo "inserted";}
}

?>