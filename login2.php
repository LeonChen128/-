<?php

include('lib/funcs.php');
include('define.php');

session_start();
unset($_SESSION['customer']);

$login    = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars(trim($_POST['password']));

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Customer WHERE login=? AND password=?');
$sql->execute([$login, $password]);

foreach ($sql->fetchAll() as $row) {
  $_SESSION['customer'] = [
    'id' => $row['id'],
    'name' => $row['name'],
    'address' => $row['address'],
    'login' => $row['login'],
    'password' => $row['password'],
  ];
}



if (isset($_SESSION['customer'])) {
  include('menu2.php');
  echo '<p>歡迎回來，' . $_SESSION['customer']['name'] . '。</p>';
}else {
  $sql_master = $pdo->prepare('SELECT * FROM Master WHERE login=? AND password=?');
  $sql_master->execute([$login, $password]);
  foreach ($sql_master->fetchAll() as $row_master) {
    $_SESSION['customer'] = [
      'id' => $row_master['id'],
      'name' => $row_master['name'],
      'login' => $row_master['login'],
      'password' => $row_master['password'],
    ];
  }
  if (isset($_SESSION['customer'])) {
    include('menu3.php');
    echo '<p>歡迎回來，' . $_SESSION['customer']['name'] . '。</p>';
  }else {
    include('menu1.php');
    echo '<p>帳號密碼輸入錯誤，請重新確認</p>';
  }
}
?>


<link rel="stylesheet" type="text/css" href="lib/all.css">
<body class="background">
</body>