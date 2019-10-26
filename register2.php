<?php

include('lib.php');
include('define.php');
include('menu.php');

$name       = htmlspecialchars(trim($_POST['name']));
$address    = htmlspecialchars(trim($_POST['address']));
$login      = htmlspecialchars(trim($_POST['login']));
$password   = htmlspecialchars(trim($_POST['password']));
$repassword = htmlspecialchars(trim($_POST['repassword']));

$pdo = linkMysql();
$sql = $pdo->prepare('INSERT INTO Customer VALUES(null, ?, ?, ?, ?)');
if ($name != '' && $address != '' && $login != '' && $password != '') {
  if ($password == $repassword) {
    $sql->execute([$name, $address, $login, $password]);
    echo '註冊成功';
  }else {
    echo '密碼確認錯誤';
  }
}else {
  echo '欄位不可空白';
}


