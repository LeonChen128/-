<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background"></body>

<?php
include('define.php');
include('menu2.php');
include('lib.php');

session_start();

$pdo = linkMysql();
$sql_purchase = $pdo->prepare('SELECT * FROM Purchase WHERE customer_id = ? ORDER BY id DESC');
$sql_purchase->execute([$_SESSION['customer']['id']]);
echo '<p style="margin-left:20px;font-size:20px;">購買紀錄：</p>';
foreach ($sql_purchase->fetchAll() as $row_purchase) {
  $sql_detail = $pdo->prepare('SELECT * FROM Purchase_Detail, Product WHERE purchase_id = ? AND product_id = Product.id');
  $sql_detail->execute([$row_purchase['id']]);
  echo '<table class="record"><tr style="background-color:rgb(81,161,180);"><th>商品編號</th><th>商品名稱</th><th>價格</th><th>數量</th><th>小計</th></tr>';
  $total = 0;
  foreach ($sql_detail->fetchAll() as $row_detail) {
    echo '<tr style="background:rgb(226,240,243);"><td>' . $row_detail['id'] . '</td>';
    echo '<td>' . $row_detail['name'] . '</td>';
    echo '<td>' . $row_detail['price'] . '</td>';
    echo '<td>' . $row_detail['count'] . '</td>';
    echo '<td>' . $row_detail['price'] * $row_detail['count'] . '</td></tr>';
    $subtotal = $row_detail['price'] * $row_detail['count'];
    $total += $subtotal;
  }
  echo '<tr style="background:rgb(241,148,169);"><td>總計</td><td></td><td></td><td></td><td>' . $total . '</td></tr>';
  echo '</table>';
}
