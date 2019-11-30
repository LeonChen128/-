<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>商品一欄-購物網站</title>
    <link rel="stylesheet" type="text/css" href="lib/all.css">
  </head>
  <body class="background">
    <?php include 'menu2.php';?>
    <form action="product1.php" method="post">
      <div class="searchTable">
      <p>查詢商品：</p>
      <?php
      if (isset($_POST['keyword'])) {
        echo '<spanl class="searchWord">請輸入商品關鍵字:</spanl>';
        echo '<input type="text" name="keyword" value="' . trim($_POST['keyword']) . '" class="searchInput">';
        echo '<button class="searchButton">查詢</button></p>';
      }else {
        echo '<spanl class="searchWord">請輸入商品關鍵字:</spanl>';
        echo '<input type="text" name="keyword" class="searchInput">';
        echo '<button class="searchButton">查詢</button>';
      }     
      ?>
      </div>
    </form>
    <div class="product-card">
      <h1 style="text-align:center;">商品資料</h1>
      <table style="text-align:center;margin-left:50px;">
        <?php
        include('lib/funcs.php');
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

        foreach ($sql->fetchAll() as $products) {
          echo '<a href="detail.php?id=' . $products['id'] . '" class="detailFrameLink">';
          echo '<div class="productFrame">';
          echo '<img src="' . $products['picture'] . '" class="pictureFrame">';
          echo '<spanl class="detailFrame">商品編號：';
          echo $products['id'] . '<br>商品名稱：';
          echo $products['name'] . '<br>商品價格：';
          echo $products['price'];
          echo '</spanl>';
          echo '</div></a>';
        }
        ?> 
      </table>
    </div> 
  </body>  
</html>