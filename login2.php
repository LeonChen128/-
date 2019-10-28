<?php

include('lib.php');
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
  echo '<p class="notice">歡迎回來，' . $_SESSION['customer']['name'] . '。</p>';
}else {
  include('menu1.php');
  echo '<p class="notice">帳號密碼輸入錯誤，請重新確認</p>';
}
?>


<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background">
</body>