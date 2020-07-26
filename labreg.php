<?php
include('connection.php');
  $labname=$labid=$labpass=$labdegree=$labsub="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $labname=$_POST['labname'];
  $labid=$_POST['labid'];
  $labpass=$_POST['labpass'];
  $labsub=$_POST['labsub'];

  /*if (empty($_POST["labname"])) {
    echo "Please enter labname";
  }
  else {
    $labname=$_POST['labname'];
  }
   if (empty($_POST["labid"])) {
    echo "Please enter labid";
  }
  else {
    $labid=$_POST['labid'];
  }
    if (empty($_POST["labpass"])) {
    echo "Please enter labpass";
  }
  else {
    $labpass=$_POST['labpass'];
  }
  if (empty($_POST["labdegree"])) {
    echo "Please enter labdegree";
  }
  else {
    $labdegree=$_POST['labdegree'];
  }*/

  if(isset($_POST['labsub'])){
    $labname=$_POST['labname'];
  $labid=$_POST['labid'];
  $labpass=$_POST['labpass'];
  $labdegree=$_POST['labdegree'];
    $sql = "INSERT INTO laboratory VALUES('$labid','$labname','$labpass','$labdegree')";
    //$result = mysqli_query($con1,$sql);
    if( !mysqli_query($con1,$sql) )
      { echo"not inserted";}
    else{    
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
