<?php
include("connection.php");
session_start();
$wcells=$rcells=$hbi="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $wcells = $_POST['whitecells'];
  $rcells = $_POST['redcells'];
  $hbin = $_POST['hemoglobin'];
  if (empty($_POST["whitecells"])) {
    echo "Please enter value of whitecells";
  } 
  else {
    $wcells = $_POST['whitecells'];
  } 
  if (empty($_POST["redcells"])) {
    echo "redcells is required";} 
  else {
    $rcells = $_POST['redcells'];}
   if(empty($_POST["hemoglobin"])){
   	echo "enter value of hemoglobin";
   }
   else
   {$hbin = $_POST['hemoglobin'];}
}
$p=$_SESSION["patiient"];
if(isset($_POST['submit'])){
$wcells = "Whitecells:".$_POST['whitecells'];
  $rcells = "Redcells:".$_POST['redcells'];
  $hbin = "Hemoglobin:".$_POST['hemoglobin'];
  $a = $wcells.",".$rcells.",".$hbin;
  $b="Blood Report";
	$sql="INSERT INTO laboratory(report_type,report_values,USERID) VALUES ('$b','$a','$p') ";
	if( !mysqli_query($con1,$sql) )
      { echo"not inserted";}
    else
      { echo "inserted";}
}

?>