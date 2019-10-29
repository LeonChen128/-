<?php

if (!empty($_SESSION['product'])) {
  echo '<table class="table-car"><p style="margin-left:10px;font-size:20px;margin-bottom:0px;">購物車：</p><tr style="background-color:rgb(81,161,180);"><th>商品編號</th><th>圖片</th><th>名稱</th><th>價格</th><th>數量</th><th>小計</th><th>動作</th></tr>';
  $total = 0;
  foreach ($_SESSION['product'] as $id => $product) {
    echo '<tr style="background:rgb(226,240,243);"><td>' . $id . '</td>';
    echo '<td>' . '<img src="img/' . $id . '.jpg" style="width:120px;height:90px;border-radius:3px;margin:10px;"></td>';
    echo '<td><a href="detail.php?id=' . $id . '" style="text-decoration: none;">' . $product['name'] . '</a></td>';
    echo '<td>' . $product['price'] . '</td>';
    echo '<td>' . $product['count'] . '</td>';
    echo '<td>' . $product['price'] * $product['count'] . '</td>';
    echo '<td><a href="car-delete.php?id=' . $id . '" style="text-decoration: none;">刪除</a></tr>';
    $subtotal = $product['price'] * $product['count'];
    $total += $subtotal;
  }
  echo '<tr style="background:rgb(241,148,169);"><td>總計</td><td></td><td></td><td></td><td></td>'; 
  echo '<td>' . $total . '</td><td></td></tr>';
  echo '</table>';
}else {
  echo '<p style="margin-left:10px;">購物車內尚未選擇任何商品</p>';
}