<html>
  <head>
    <title>練習一下</title>
  </head>
  <body>
    <table>
      <tr><th>商品編號</th><th>商品名稱</th><th>商品價格</th></tr>  
      <?php
      include('lib.php');
      include('define.php');
      
      $pdo = linkMysql();
      $sql = $pdo->prepare('SELECT * FROM Product');
      $sql->execute();
      foreach ($sql->fetchAll() as $row) {
        echo '<tr>';
        echo '<form action="index2.php" method="post">';
        echo '<input type="hidden" name = "id" value="' . $row['id'] . '">';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td><input type="text" name="name" value="' . $row['name'] . '"></td>';
        echo '<td><input type="text" name="price" value="' . $row['price'] . '"></td>';
        echo '<td><input type="submit" value="修改"></td>';
        echo '</form></tr>';
      }
      ?>
    </table>
  </body>
</html>