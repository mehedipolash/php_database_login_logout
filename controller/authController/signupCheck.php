<?php

include_once('../../model/userModel.php');

$name = "";
$password = "";
$phone = "";
$education = [];
$gender = "";
$address = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $education = $_POST['education'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];

  $result = RegistrationUser($name,$password,$phone,$education,$gender,$address);

  if ($result) {
    header("location: ../../../../view/authentication/login.php");
  } else {
    header("location: ../../../../view/authentication/signup.php");
  }
  
  
}
















?>