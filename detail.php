<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background"></body>

<?php

include('lib.php');
include('define.php');
include('menu2.php');

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Product WHERE id = ?');
$sql->execute([$_REQUEST['id']]);

echo '<div class="detail-card">';

foreach ($sql->fetchAll() as $row) {
  echo '<p class="picture"><img src="img/' . $row['id'] . '.jpg" class="picture-size"></p>';
  echo '<p class="product-detail">商品編號：' . $row['id'] . '</p>';
  echo '<p class="product-detail">商品名稱：' . $row['name'] . '</p>';
  echo '<p class="product-detail">商品價格：' . $row['price'] . '</p>';
  echo '<form action="car.php" method="post">';
  echo '<p class="product-detail">數量：';
  echo '<select name="count">';
  for ($i=1; $i<=14; $i++) {
    echo '<option value="' . $i . '">' . $i . '</option>';
  }
  echo '</select></p>';
  echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
  echo '<input type="hidden" name="name" value="' . $row['name'] . '">';
  echo '<input type="hidden" name="price" value="' . $row['price'] . '">';
  echo '<p class="product-detail"><button class="car">加入購物車</button></p>';
  echo '</form>';
  echo '<p class="product-detail"><a href="favorite.php?id=' . $row['id'] . '" class="product">加入我的最愛</a></p>';
}
echo '</div>';