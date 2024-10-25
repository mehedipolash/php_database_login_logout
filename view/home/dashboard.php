<?php

require('../../controller/authController/sessionGuard.php');


$name = "";
$name = $_SESSION["uname"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  <h1>Welcome</h1>
  <h2>Your User Name is : <?php echo $name ? $name: "No Name"; ?></h2>
  <hr>

  <a href="../../controller/authController/logoutCheck.php">Logout</a>
</body>
</html>