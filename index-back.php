<?php
include ("connection.php");
//$con1 = mysqli_connect('localhost','root','',"health card");
  $con = mysqli_connect('127.0.0.1','root','');
  mysqli_select_db($con,'hcard');
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
session_start();
  $select = $userid = $password = "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid=$_POST['userid'];
$password=$_POST['password'];
$select=$_POST['select'];
  if($select == "Default") { 
    echo "Please select any";
  } 
  if (empty($_POST["userid"])) {
    echo "Please enter user id";
  } 
  else {
    $userid = $_POST['userid'];
  } 
  if (empty($_POST["password"])) {
    echo "password is required";
  } else {
    $password = $_POST['password'];
  }
  $_SESSION["select"]=$select;
  //DOCTOR-login
if ($select == "Doctor") { 
  $sql = "SELECT DOCLID,DOCPASS FROM doctor WHERE DOCLID = '$userid' ";
  $result = mysqli_query($con,$sql);
$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($row1["DOCLID"] == $userid && $row1["DOCPASS"] == $password)
    {
      $_SESSION["doclid"]=$row1["DOCLID"];
      if(isset($_SESSION["doclid"]))
      {
        redirect('home1.php');
      }
      else{
        echo "alert('Fail to start session')";
      }
      
    }
  else
    {echo"Sorry, your credentials are not valid, Please try again.";}
}
//USER-login
if ($select == "User") { 
  $sql = "SELECT USERID,UPASS FROM patient WHERE USERID = '$userid' ";
  $result = mysqli_query($con,$sql);
$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($row1["USERID"] == $userid && $row1["UPASS"] == $password)
    {
      $_SESSION["userid"]=$row1["USERID"];
      if(isset($_SESSION["userid"]))
      {
        redirect('pat.php');
      }
      else{
        echo "alert('Fail to start session')";
      }
  }
  else
    {echo"Sorry, your credentials are not valid, Please try again.";}
}
//Pharmist-Login
if ($select == "Pharmasist") { 
  $sql = "SELECT PHID,PHPASS FROM pharmacist WHERE PHID = '$userid' ";
  $result = mysqli_query($con,$sql);
$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($row1["PHID"] == $userid && $row1["PHPASS"] == $password)
    {
      $_SESSION['pharmaid']=$row1["PHID"];
      if(isset($_SESSION["pharmaid"]))
      {
        redirect('home.php');
      }
      else{
        echo "alert('Fail to start session')";
      }
  }
  else
    {echo"Sorry, your credentials are not valid, Please try again.";}
}
//Laboratory-Login
if ($select == "Laboratory") { 
  $sql = "SELECT LABID,LPASS FROM laboratory WHERE LABID = '$userid' ";
  $result = mysqli_query($con,$sql);
$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($row1["LABID"] == $userid && $row1["LPASS"] == $password)
    {
      $_SESSION['laboratoryid']=$row1["LABID"];
      if(isset($_SESSION["laboratoryid"]))
      {
        redirect('home.php');
      }
      else{
        echo "alert('Fail to start session')";
      }
  }
  else
    {echo"Sorry, your credentials are not valid, Please try again.";}
}

} 
?>