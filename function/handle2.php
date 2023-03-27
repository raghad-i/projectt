<?php
include('connect.php');

$gender = $_POST['gender'];
$age = $_POST['age'];
$Hdiseases = $_POST['Hdiseases'];
$Cdiseases = $_POST['Cdiseases'];
$yesHdiseases = $_POST['yesHdiseases'];
$yesCdiseases = $_POST['yesCdiseases'];

if(isset($_POST['Sent'])){
    $Questions="INSERT INTO questions(`gender`,`age`,`Hdiseases`,`Cdiseases`,`yesHdiseases`,`yesCdiseases`)
    VALUES('$gender','$age','$Hdiseases','$Cdiseases','$yesHdiseases','$yesCdiseases')";
  
  if(mysqli_query($conn,$Questions)){
      echo "done";
  }else{
     die(mysqli_error($conn));
  }
  }
  ?>