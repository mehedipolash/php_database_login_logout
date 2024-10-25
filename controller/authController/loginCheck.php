<?php

include_once('../../model/userModel.php');
session_start();

$name = "";
$password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
  $password = $_POST['password'];

  $result = LoginUser($name,$password);
  
  if ($result['success']) {
    $_SESSION["uname"] = $result['uname'];
    $_SESSION["flag"] = true;
    header("location: ../../../../view/home/dashboard.php");
  } elseif($result['success'] == false) {
    header("location: ../../../../view/authentication/login.php");
  }
}
















?>