<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../asset/css/auth/login.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="wrapper">
        <h1 class="nh1">User Login</h1>
        <div class="form1">
            <form action="../../controller/authController/loginCheck.php" method="post">
              <div>
                  <input type="text" name="name" id="" placeholder="Name"/>
              </div>
              <div>
                  <input type="password" name="password" id="" placeholder="Password"/>
              </div>
              <div>
                  <button type="submit">Login</button>
              </div>
            </form>
            <div><a href="signup.php">Signup</a></div>
        </div>
    </div>
  </div>
</body>
</html>