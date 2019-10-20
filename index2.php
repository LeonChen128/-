<?php

include('lib.php');

$pdo = linkMysql('localhost', 'SHOP', 'root', '1234');

$name  = htmlspecialchars(trim($_POST['name']));
$price = htmlspecialchars(trim($_POST['price']));

if ($name =='' or $price =='') {
  echo '商品名稱及價格輸入處不得空白，請重新輸入';
  exit;
}

if (!preg_match('/[0-9]/', $price)) {
  echo '價格欄位請輸入0-9之數字，請重新輸入';
  exit;
}

$sql = 'insert into Product values(null,"' . $name . '", ' . $price . ')';

if ($pdo->query($sql)) {
  echo '商品新建成功';
}

