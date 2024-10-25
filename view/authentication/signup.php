<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../asset/css/auth/signup.css">
  <title>Signup</title>
</head>
<body>
  <h1 class="nh1">User Registration</h1>
  <div>
      <form action="../../controller/authController/signupCheck.php" method="post">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" id="" placeholder="Name"/>
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="" placeholder="Password"/>
        </div>
        <div>
            <label for="">Phone</label>
            <input type="text" name="phone" id="" placeholder="Phone"/>
        </div>
        <div>
            <label for="">Education</label>
            <select name="education" id="">
              <option value="" disabled selected>Select an option</option>  
              <option value="HSC">HSC</option>
              <option value="SSC">SSC</option>
              <option value="BSC">BSC</option>
              <option value="MSC">MSC</option>
            </select>
        </div>
        <div>
            <label for="">Gender</label>
            <input type="radio" name="gender" id="" value="Male"/>Male
            <input type="radio" name="gender" id="" value="Female"/>Female
            <input type="radio" name="gender" id="" value="Others"/>Others
        </div>
        <div>
            <label for="">Address</label>
            <input type="text" name="address" id="" placeholder="Address"/>
        </div>
        <div>
            <button type="submit">Signup</button>
        </div>
      </form>
      <a href="login.php">Login</a>
  </div>
</body>
</html>