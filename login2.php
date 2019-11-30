<?php

include('lib/funcs.php');
include('define.php');

session_start();
unset($_SESSION['customer']);

if (!isset($_POST['login'], $_POST['password'])) {
  echo '通訊錯誤';
  header('Refresh: 3 url = login1.php');
  exit();
}

$login    = trim($_POST['login']);
$password = trim($_POST['password']);

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Customer WHERE login=? AND password=?');
$sql->execute([$login, $password]);

foreach ($sql->fetchAll() as $user) {
  $_SESSION['customer'] = [
    'id'       => $user['id'],
    'name'     => $user['name'],
    'address'  => $user['address'],
    'login'    => $user['login'],
    'password' => $user['password'],
  ];
}

include 'lib/header.php';

if (isset($_SESSION['customer'])) {
  include 'menu2.php';
  noticeTable('歡迎回來，' . $_SESSION['customer']['name'] . '。');
  header('Refresh:3 url=product1.php');
}else {
  $sql_master = $pdo->prepare('SELECT * FROM Master WHERE login=? AND password=?');
  $sql_master->execute([$login, $password]);
  foreach ($sql_master->fetchAll() as $master) {
    $_SESSION['customer'] = [
      'id'       => $master['id'],
      'name'     => $master['name'],
      'login'    => $master['login'],
      'password' => $master['password'],
    ];
  }
  if (isset($_SESSION['customer'])) {
    include 'menu3.php';
    noticeTableMaster('歡迎回來，' . $_SESSION['customer']['name'] . '。');
    header('Refresh:3 url=master_edit.php');   
  }else {
    include 'menu1.php';
    noticeTable('帳號密碼輸入錯誤，請重新確認');
    header('Refresh:3 url=login1.php');
  }
}

include 'lib/footer.php';