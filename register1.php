<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>帳號註冊-購物網站</title>
    <link rel="stylesheet" type="text/css" href="lib.css">
  </head>
  <body class="background">
    <?php
    include('menu1.php');
    ?>
    <div class="card">  
        <form action="register2.php" method="post">
          <h1 style="margin:0;text-align:center;">會員註冊</h1>
          <div style="text-align:center;margin-top:40px">
            <p><input type="text" name="name" placeholder="名稱" class="input-text"></p>
            <p><input type="text" name="address" placeholder="地址" class="input-text"></p>
            <p><input type="text" name="login" placeholder="帳號" class="input-text"></p>
            <p><input type="password" name="password" placeholder="密碼" class="input-text"></p>
            <p><input type="password" name="repassword" placeholder="重複輸入密碼" class="input-text"></p>
          </div>
          <p><button class="button">註冊</button></p>
        </form> 
    </div>    
  </body>
</html>