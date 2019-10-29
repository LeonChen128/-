<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background"></body>

<?php

include('define.php');
include('lib.php');
include('menu2.php');

session_start();

$pdo = linkMysql();
$sql = $pdo->prepare('DELETE FROM Favorite WHERE customer_id=? AND product_id=?');
$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);

echo '<p style="margin-left:10px;">已從我的最愛移除該商品</p>';
echo '<hr>';

include('favorite.php');