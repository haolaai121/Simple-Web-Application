<div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" action="./Signin/UserSignin" method="POST">
      <input id="txt_signin_user" name="username" class="un " type="text" align="center" placeholder="Username">
      <input id="txt_signin_pwn" name="password" class="pass" type="password" align="center" placeholder="Password">

      <a id="btn_signin_signup"class="submit" align="left" href="./Signup">Sign up</a>
      
      <button type="submit" name="BtnSignin" id="btn_signin_signin"class="submit1" align="left" href="#">Sign in</button>
    </form>
    <div>
    <?php
    error_reporting(E_ERROR | E_PARSE); 
    if (isset($data["result"])){?>
    <?php
      if ($data["result"] == "true"){
        echo "Đăng nhập thành công !";
      }
      else{
        echo "Đăng nhập thất bại !";
      }
      ?>
    </div>
  <?php } ?> 
    </div>
  </div>
