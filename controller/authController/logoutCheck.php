<?php
session_start();

unset($_SESSION['uname']);
unset($_SESSION['flag']);
header("location: ../../../../view/authentication/login.php");

?>>