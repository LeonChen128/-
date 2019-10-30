<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background"></body>

<?php
include('define.php');
include('lib.php');
include('menu2.php');

session_start();
$pdo = linkMysql();

$purchase_id = 1;
foreach ($pdo->query('SELECT max(id) FROM Purchase') as $row) {
  $purchase_id = $row['max(id)'] + 1;
}

if (!empty($_SESSION['product'])) {
  $sql1 = $pdo->prepare('INSERT INTO Purchase VALUES(null, ?)');
  $sql1->execute([$_SESSION['customer']['id']]);
  foreach ($_SESSION['product'] as $id => $product) {
    $sql3 = $pdo->prepare('INSERT INTO Purchase_Detail VALUES(null, ?, ?, ?)');
    $sql3->execute([$purchase_id, $id, $product['count']]);
  } 
  echo '<p style="margin-left:10px;">訂單新增成功！</p>';
  unset($_SESSION['product']);
}else {
  echo '<p style="margin-left:10px;">購物車無任何商品</p>';
}



