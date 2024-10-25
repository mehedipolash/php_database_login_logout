<?php
  $dbhost = "localhost";
  $dbname = "testproject";
  $dbuser = "root";
  $dbpassword = "mysql";

  function getConnection(){
    global $dbhost;
    global $dbname;
    global $dbuser;
    global $dbpassword;

    return $con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
  }

?>