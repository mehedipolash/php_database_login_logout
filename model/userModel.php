<?php

include_once('db.php');

function RegistrationUser ($name,$pass,$ph,$edu,$gender,$address){
  $conn = getConnection();

  $sql = "INSERT INTO users (name, password, phone, education, gender, address) 
          VALUES ('$name', '$pass', '$ph', '$edu', '$gender', '$address')";
  
  mysqli_query($conn,$sql);

  if(mysqli_affected_rows($conn)>0){
    return true;
  }else{
    return false;
  }
}

function LoginUser ($username, $password){
  $conn = getConnection();

  $sql = "SELECT * from users WHERE name='$username' AND password='$password'";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);
    return array('success'=> true, "uname"=> $user['name']);
  }else{
    return array('success'=> false);
  }

}


?>