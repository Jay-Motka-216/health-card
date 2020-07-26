<?php 
$con1 = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con1,"hcard");
if(!$con1)
{
  
  die(" not connected".mysqli_error());
}
?>