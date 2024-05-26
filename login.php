<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="log.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="log.php" method="post">
        <input type="email" placeholder="Enter your email" name="l-email">
        <input type="password" placeholder="Enter your password" name="l-password">
        <a href="forgot.php">Forgot password?</a>
        <input type="submit" class="button" value="Login" name=login>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check" >Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="log.php" method="post">
      <input type="text" placeholder="Enter your username" name='username'>
        <input type="email" placeholder="Enter your email" name="email">
        <input type="number" placeholder="Enter your mobile number" name="mobile">
        <input type="password" placeholder="Create a password" name="password">
        <input type="SUBMIT" class="button" value="sign" name="sign">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
  
</body>
</html>