<?php

include('lib.php');
include('define.php');

$id    = $_POST['id'];
$name  = $_POST['name'];
$price = $_POST['price'];

$pdo = linkMysql();
$sql = $pdo->prepare('UPDATE Product SET name = ?, price = ? WHERE id = ?');
if ($sql->execute([$name, $price, $id])) {
  echo '修改成功';
}else {
  echo '修改失敗';
}

