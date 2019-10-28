<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>商品一欄-購物網站</title>
    <link rel="stylesheet" type="text/css" href="lib.css">
  </head>
  <body class="background">
    <?php
    include('menu2.php');
    ?>
    <form action="product1.php" method="post">
      <p class="notice">查詢商品：</p>
      <?php
      if (isset($_POST['keyword'])) {
        echo '<p class="notice">請輸入商品關鍵字:<input type="text" name="keyword" value="' . htmlspecialchars(trim($_POST['keyword'])) . '" style="font-size:18px;margin-left:5px;">';
        echo '<button style="font-size:16px;border-radius:2px;background:rgb(82,161,180);color:white;">查詢</button></p>';
      }else {
        echo '<p class="notice">請輸入商品關鍵字:<input type="text" name="keyword" style="font-size:18px;margin-left:5px;">';
        echo '<button style="font-size:16px;border-radius:2px;background:rgb(82,161,180);color:white;">查詢</button></p>';
      }     
      ?>
      <hr>
    </form> 
    <div class="product-card">
      <h1 style="text-align:center;">商品資料</h1>
      <table style="text-align:center;margin-left:50px;">
        <tr class="word18px"><th>商品編號</th><th>商品名稱</th><th>商品價格</th></tr>
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
          echo '<tr class="word18px"><td>' . $row['id'] . '</td>';
          echo '<td><a href="detail.php?id=' . $row['id'] . '" class="product">' .  $row['name'] . '</a></td>';
          echo '<td>' . $row['price'] . '</td></tr>';
        }
        ?> 
      </table>
    </div>  
  </body>  
</html>