<?php
include('connect.php');
$Name = $_POST['Name'];
$Email = $_POST['Email'];  
$Phone = $_POST['Phone'];
$Age = $_POST['Age'];
$address = $_POST['address'];
$Gender = $_POST['Gender'];
$University = $_POST['University'];
$Degree = $_POST['Degree'];
$certificate = $_POST['certificate'];
$message = $_POST['message'];

if(isset($_POST['register'])){
  $Doctor="INSERT INTO doctor(`Name`,`Email`,`Phone`,`Age`,`address`,`Gender`,`University`,`Degree`,`certificate`,`message`)
  VALUES('$Name','$Email' ,'$Phone','$Age','$address','$Gender','$University','$Degree','$certificate','$message')";

if(mysqli_query($conn,$Doctor)){
    echo "done";
}else{
   die(mysqli_error($conn));
}
}

?>