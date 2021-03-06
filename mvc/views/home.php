<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
  body {
    background-color: #F3EBF6;
    font-family: 'Ubuntu', sans-serif;
}


.fl_left{float: left;}
.fl_right{float:ri}
.main1 {
    background-color: #FFFFFF;
    width: auto;
    height: auto;
    border-radius: 1.5em;
    margin-top: 25px;
    
}
.header{
    background:#FECFE2;
    width: 100% ;
    
    margin: 0px auto;
    padding: 30px 0px 30px 0px;
    font-family: 'Ubuntu', sans-serif;
    border-radius: 1.5em;
}

.menu{
    margin: 0px auto;
    padding: 0px 0px 20px 0px;
      float: right;
      list-style: left;
      
}
.menu li{
    list-style:  none;
    float:left;
    font-family: 'Ubuntu', sans-serif;
}
.menu li a{
    padding: 0px 15px;
    font-size: 14pt;
    color:#7FB39F;
    font-family: 'Ubuntu', sans-serif;
    
}

.sign {
    
}
.fakebook {
    cursor: pointer;
      border-radius: 5em;
      color: #fff;
      background: linear-gradient(to right, #9C27B0, #E040FB);
      border: 0;
      padding-left: 40px;
      padding-right: 40px;
      padding-bottom: 10px;
      padding-top: 10px;
      font-family: 'Ubuntu', sans-serif;
        margin-left: 1%;
      font-size: 20pt;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
      font-style:initial ;
  }

.post{
    
    border-radius: 1em;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 10px;
    padding-top: 10px;
    margin-top: auto;
    font-family: 'Ubuntu', sans-serif;
    margin-left: 5%;
    margin-right: 5%;
    margin-top: 1%;
    margin-bottom: 1%;
    font-size: 20pt;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    font-style:initial ;
}
.post button{
margin: 1px;
}
.post a{
    margin-top: 20%;
    margin-left: 1%;
    position: relative
}
.post img{
   height: 50px;
}
.un {
width: 76%;
color: rgb(38, 50, 56);
font-weight: 700;
font-size: 20px;
letter-spacing: 1px;
background: rgba(136, 126, 126, 0.04);
padding: 10px 20px;
border: none;
border-radius: 20px;
outline: none;
box-sizing: border-box;
border: 2px solid rgba(0, 0, 0, 0.02);
margin-bottom: 50px;
margin-left: 46px;
text-align: center;
margin-bottom: 27px;
font-family: 'Ubuntu', sans-serif;
}

.cmt {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 20px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 20px;
    margin-top: 20px;

    
    
    font-family: 'Ubuntu', sans-serif;
    }

    .cmt_l{
    
        border-radius: 1em;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        margin-top: auto;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 5%;
        margin-right: 5%;
        margin-top: 1%;
        margin-bottom: 1%;
        font-size: 20pt;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
        font-style:initial ;
    }
 
    .cmt_l a{
        margin-top: 20px;
    }
.cmt_l button{
    margin-left: 0px;
}
  </style>
  <title>Home</title>
</head>

<body>
 
 <div class ="header" >
   <div>
    <a class="fakebook">FaKeBoOk<a>
        <div class="menu ">
        <l id="main_menu" >
            <li><a href="" class="">Trang c?? nh??n</a></li>
            <li><a href="./signin.php" >????ng xu???t</a></li>
            <li><a href="" >C??i ?????t</a></li>
        </div>        
    </div>
  
<div class="main1">
  <div>
      <input class="un" type="text" placeholder=" b???n ?????ng ngh?? g??">     
    <button>
      ????ng 
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
