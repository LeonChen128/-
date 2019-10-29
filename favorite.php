<?php


echo '<table class="table-car">';
echo '<p style="margin-left:10px;font-size:20px;margin-bottom:0px;">我的最愛：</p>';
echo '<tr style="background-color:rgb(81,161,180);"><th>商品編號</th><th>圖片</th><th>名稱</th><th>價格</th><th>動作</th></tr>';

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Favorite, Product WHERE customer_id =? AND product_id = product.id ');
$sql->execute([$_SESSION['customer']['id']]);
foreach ($sql -> fetchAll() as $row) {
  echo '<tr style="background:rgb(226,240,243);"><td>' . $row['id'] . '</td>';
  echo '<td><img src="img/' . $row['id'] . '.jpg" style="width:120px;height:90px;"></td>';
  echo '<td><a href="detail.php?id=' . $row['id'] . '">' . $row['name'] . '</a></td>';
  echo '<td>' . $row['price'] . '</td>';
  echo '<td><a href="favorite-delete.php?id=' . $row['id'] . '">移除</a></td></tr>';
}
echo '</table>';
