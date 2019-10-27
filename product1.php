<html>
  <head>
    <title>商品一欄</title>
  </head>
  <body>
    <?php
    include('menu2.php');
    ?>
    <form action="product1.php" method="post">
      <p>查詢商品：</p>
      <?php
      if (isset($_POST['keyword'])) {
        echo '請輸入商品關鍵字:<input type="text" name="keyword" value="' . htmlspecialchars(trim($_POST['keyword'])) . '">';
      }else {
        echo '請輸入商品關鍵字:<input type="text" name="keyword">';
      }     
      ?>
      <input type="submit" value="查詢">
      <hr>
    </form> 
    <h1>商品資料</h1>
    <table>
      <tr><th>商品編號</th><th>商品名稱</th><th>商品價格</th></tr>
      <?php
      include('lib.php');
      include('define.php');

      $pdo = linkMysql();
      if (isset($_POST['keyword'])) {
        $sql = $pdo->prepare('SELECT * FROM Product WHERE name like ?');
        $keyword = '%' . htmlspecialchars(trim($_POST['keyword'])) . '%';
        $sql->execute([$keyword]);
      }else {
        $sql = $pdo->prepare('SELECT * FROM Product');
        $sql->execute();
      }
      
      foreach ($sql->fetchAll() as $row) {
        echo '<tr><td>' . $row['id'] . '</td>';
        echo '<td><a href="detail.php?id=' . $row['id'] . '">' .  $row['name'] . '</a></td>';
        echo '<td>' . $row['price'] . '</td></tr>';
      }
      ?> 
    </table>
  </body>  
</html>