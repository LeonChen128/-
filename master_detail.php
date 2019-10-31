<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background"></body>

<?php

include('lib.php');
include('define.php');
include('menu3.php');

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Product WHERE id = ?');
$sql->execute([$_REQUEST['id']]);

echo '<div class="detail-card">';

foreach ($sql->fetchAll() as $row) {
  echo '<p class="picture"><img src="img/' . $row['id'] . '.jpg" class="picture-size"></p>';
  echo '<p class="product-detail">商品編號：' . $row['id'] . '</p>';
  echo '<p class="product-detail">商品名稱：' . $row['name'] . '</p>';
  echo '<p class="product-detail">商品價格：' . $row['price'] . '</p>';
  }
