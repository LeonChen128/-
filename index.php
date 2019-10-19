<html>
  <head>
    <title>這是個練習</title>
  </head> 
  <body>
    <table>
      <tr><th>商品編號</th>
          <th>商品名稱</th>
          <th>商品價格</th></tr>  
      <?php
      include ('lib.php');
      $pdo = linkMysql('localhost', 'SHOP', 'root', '1234');
      foreach ($pdo->query('select * from Product') as $row) {  
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['price']) . '</td>';
        echo '</tr>';
      }  
      ?>
    </table>
  </body>  
</html>