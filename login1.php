<html>
  <head>
    <title>請登入帳號</title>
  </head>
  <body>
    <?php
    include('menu.php');
    ?>
    <table>
      <h1>請輸入您的帳號密碼</h1>
      <form action="login2.php" method="post">
      <tr><td>帳號：</td><td><input type="text" name="login"></td></tr>
      <tr><td>密碼：</td><td><input type="password" name="password"></td></tr>
      <td><input type="submit" value="送出"></td>
      </form>
    </table>
    <p>尚未註冊?</p>
    <a href="register1.php">前往註冊</a>
  </body>  
</html>
