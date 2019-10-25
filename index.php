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
        echo '<tr><form action="index2.php" method="post">';
        echo '<input type="hidden" name="command" value="update">';
        echo '<input type="hidden" name="id" value="' . $row['id'] .'">';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td><input type="text" name="name" value="' . $row['name'] . '"></td>';
        echo '<td><input type="text" name="price" value="' . $row['price'] . '"></td>';
        echo '<td><input type="submit" value="確定修改"></td></form>';
        echo '<form action="index2.php" method="post">';
        echo '<input type="hidden" name="command" value="delete">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<td><input type="submit" value="確定刪除"></td></form></tr>';         
      }
      ?>
      <form action="index2.php" method="post">
        <tr>
          <input type="hidden" name="command" value="insert">  
          <td></td>
          <td><input type="text" name="name"></td>
          <td><input type="text" name="price"></td>
          <td><input type="submit" value="確定新增"></td>
        </tr>
      </form>      
    </table>
  </body>
</html>