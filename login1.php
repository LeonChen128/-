<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>帳號登入-購物網站</title>
    <link rel="stylesheet" type="text/css" href="lib.css">
  </head>
  <body class="background">
    <?php
    include('menu1.php');
    ?>
    <div class="card">
        <form action="login2.php" method="post">
          <h1 style="text-align:center;">會員登入</h1>
          <div style="text-align:center;margin-top:50px">
            <p><input type="text" name="login" placeholder="帳號" class="input-text"></p>
            <p><input type="password" name="password" placeholder="密碼" class="input-text"></p>
          </div>
          <button type="submit" class="button">登入</button>
        </form>
    <div style="text-align:center;margin-top:50px;">
        <p>尚未註冊?</p>
        <a href="register1.php">前往註冊</a>  
    </div>
  </body>  
</html>
