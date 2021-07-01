<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./mvc/views/home.css">
  <title>Home</title>
</head>

<body>
 
 <div class ="header" >
   <div>
    <a class="fakebook">FaKeBoOk<a>
        <div class="menu ">
        <l id="main_menu" >
            <li><a href="" class="">Trang cá nhân</a></li>
            <li><a href="./signin.php" >Đăng xuất</a></li>
            <li><a href="" >Cài đặt</a></li>
        </div>        
    </div>
  
<div class="main1">
  <div>
      <input class="un" type="text" placeholder=" bạn đạng nghĩ gì">     
    <button>
      đăng 
    </button>
  </div>
  <div class="post">
      <?php
            require_once "./mvc/views/pages/post_view.php"; 
    ?>
  </div>

  <div class="post">
      <?php
            require_once "./mvc/views//pages/post.php"; 
    ?>
  </div>
  
  <div class="post">
      <?php
            require_once "./mvc/views/pages/post_own.php"; 
    ?>
  </div>
  
  
</div>  
             
</body>
</html>
<html>
