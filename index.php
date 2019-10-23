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
        echo '<tr><td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '<td><a href="index2.php?id=' . $row['id'] . '">確定刪除</a></td>';
        echo '</tr>';
      }
      ?>
    </table>
  </body>
</html>