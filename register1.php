<html>
  <head>
    <title>會員註冊</title>
  </head>
  <body>
    <?php
    include('menu.php');
    ?>
    <h1>會員註冊</h1>
    <table>
      <form action="register2.php" method="post">
        <tr><td>會員名字：</td><td><input type="text" name="name"></td></tr>
        <tr><td>會員地址：</td><td><input type="text" name="address"></td></tr>
        <tr><td>會員帳號：</td><td><input type="text" name="login"></td></tr>  
        <tr><td>會員密碼：</td><td><input type="password" name="password"></td></tr>
        <tr><td>再次輸入密碼：</td><td><input type="password" name="repassword"></td></tr>
        <tr><td><input type="submit" value="送出"></td></tr>
      </form>
    </table>    
  </body>
</html>