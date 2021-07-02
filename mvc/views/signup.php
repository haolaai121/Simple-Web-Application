<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./mvc/views/filecss.css">
  <title>Sign up</title>
</head>
<body>
  <div class="main">
    <p class="sign" align="center">Sign up</p>
    <form class="form2" action="./Signup/UserSignup" method="POST">
      <input class="un " type="text" name="username" align="center" placeholder="Username">
      <input class="un " type="text" name="email" align="center" placeholder="Email">
      <input class="pass" type="password" name="password" align="center" placeholder="Password">
      <input class="pass" type="password" name="confirm_password" align="center" placeholder="Confirm Password">
      <a class="submit1" align="left" href="./Signin">Back </a>
      <button class="submit" type="submit" name="btnSignup" align="left">Sign up</button>
    </form>
    <?php if (isset($data["result"])){?>
    <div>
    <?php
      if ($data["result"] == "true"){
        echo "Đăng kí thành công !";
      }
      else{
        echo "Đăng kí thất bại !";
      }
      ?>
    </div>
  <?php } ?> 
  </div>     
</body>
</html>
<html>

