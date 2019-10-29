<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background"></body>

<?php

include('define.php');
include('lib.php');
include('menu2.php');

session_start();

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Favorite WHERE customer_id=? AND product_id=?');
$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
foreach ($sql->fetchAll() as $row) {
}
if (empty($row)) {
  $sql = $pdo->prepare('INSERT INTO Favorite VALUES(null,?,?)');
  $sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);

  echo '<p style="margin-left:10px;">商品成功加入我的最愛</p>';
  echo '<hr>';
}else {
  echo '<p style="margin-left:10px;">該商品已加入至我的最愛</p>';
}



include('favorite.php');