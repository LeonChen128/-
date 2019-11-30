<?php

include('lib/funcs.php');
include('define.php');
include('menu2.php');

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Product WHERE id = ?');
$sql->execute([$_REQUEST['id']]);

?>



<?php include 'lib/header.php'?>
<div class="detail-card">
  <?php
  foreach ($sql->fetchAll() as $product) {
    echo '<p class="picture"><img src="img/' . $product['id'] . '.jpg" class="picture-size"></p>';
    echo '<p class="product-detail">商品編號：' . $product['id'] . '</p>';
    echo '<p class="product-detail">商品名稱：' . $product['name'] . '</p>';
    echo '<p class="product-detail">商品價格：' . $product['price'] . '</p>';
    echo '<form action="car-insert.php" method="post">';
    echo '<p class="product-detail">數量：';
    echo '<select name="count">';
    for ($i=1; $i<=14; $i++) {
      echo '<option value="' . $i . '">' . $i . '</option>';
    }
    echo '</select></p>';
    echo '<input type="hidden" name="id" value="' . $product['id'] . '">';
    echo '<input type="hidden" name="name" value="' . $product['name'] . '">';
    echo '<input type="hidden" name="price" value="' . $product['price'] . '">';
    echo '<p class="product-detail"><button class="car">加入購物車</button></p>';
    echo '</form>';
    echo '<p class="product-detail"><a href="favorite-insert.php?id=' . $product['id'] . '" class="product">加入我的最愛</a></p>';
  }
  ?>
</div>
<?php include 'lib/footer.php'?>