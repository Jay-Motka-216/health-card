<?php
          include ("connection.php");
          $con = mysqli_connect('127.0.0.1','root','');
          mysqli_select_db($con,"hcard");
          session_start();     
          
          function redirect($url){
              ob_start();
              header('Location :'.$url);
              ob_end_flush();
          }
          

          if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid=$_POST['patient-id'];
    $password=$_POST['pswd'];
    if (empty($_POST['patient-id'])) {
    echo "Please enter patient id";
  } 
  else{
  	$userid=$_POST['patient-id'];
  }
  	if (empty($_POST['pswd'])) {
    echo "Please enter password";

  }
  else{
  	$password=$_POST['pswd'];
  }
}
    if(isset($_POST['submit']))
    {
 $sql = "SELECT USERID,UPASS FROM patient WHERE USERID = '$userid' ";
  $result = mysqli_query($con,$sql);
$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($row1["USERID"] == $userid && $row1["UPASS"] == $password)
    {
      $_SESSION["patient"]=$row1["USERID"];
    
      if(isset($_SESSION["patient"]))
      {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/doc.php');
        exit;
     }
      else
     {
        echo "alert('Fail to start session')";
     }
   }
else{
  echo "Invalid userid pass";
}
}
?>