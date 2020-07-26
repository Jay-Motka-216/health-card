<?php
include('connection.php');
  $docname=$docid=$docdegree=$docpass=$docsub="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $docname=$_POST['docname'];
  $docid=$_POST['docid'];
  $docdegree=$_POST['docdegree'];
  $docpass=$_POST['docpass'];
  $hosp=$_POST['hosp'];

  if (empty($_POST["docname"])) {
    echo "Please enter docname";
  }
  else {
    $docname=$_POST['docname'];
  }
   if (empty($_POST["docid"])) {
    echo "Please enter docid";
  }
  else {
    $docid=$_POST['docid'];
  }
    if (empty($_POST["docdegree"])) {
    echo "Please enter docdegree";
  }
  else {
    $docdegree=$_POST['docdegree'];
  }
  if (empty($_POST["hosp"])) {
    echo "Please enter docname";
  }
  else {
    $docname=$_POST['hosp'];
  }
    if (empty($_POST["docpas"])) {
    echo "Please enter docpas";
  }
  else {
    $docpas=$_POST['docpas'];
  }

  if(isset($_POST['docsub'])){
    $docname=$_POST['docname'];
  $docid=$_POST['docid'];
  $docdegree=$_POST['docdegree'];
  $docpass=$_POST['docpass'];
  $hosp=$_POST['hosp'];
    $sql = "INSERT INTO doctor VALUES('$docname','$docid','$docdegree','$hosp','$docpass')";
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

