<?php

include('lib.php');
include('define.php');

session_start();
unset($_SESSION['customer']);

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Customer WHERE login=? AND password=?');
$sql->execute([$_POST['login'], $_POST['password']]);
foreach ($sql->fetchAll() as $row) {
  $_SESSION['customer'] = [
    'id' => $row['id'],
    'name' => $row['name'],
    'address' => $row['address'],
    'login' => $row['login'],
    'password' => $row['password']
  ];
}

if (isset($_SESSION['customer'])) {
  echo '歡迎回來，' . $_SESSION['customer']['name'] . '。';
}else {
  echo '輸入有錯';
}

