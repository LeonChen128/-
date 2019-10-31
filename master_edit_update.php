<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background">
</body>

<?php

include('define.php');
include('lib.php');
include('menu3.php');
$id    = htmlspecialchars(trim($_POST['id']));
$name  = htmlspecialchars(trim($_POST['name']));
$price = htmlspecialchars(trim($_POST['price']));


$pdo = linkMysql();
$sql = $pdo->prepare('UPDATE Product SET name=? , price=? WHERE id=?');
$sql->execute([$name, $price, $id]);

echo '<p class="notice">修改成功!</p>';

