<?php

session_start();

if(!$_SESSION['flag']){
  header("location: ../../../../view/authentication/login.php");
}

?>