<?php

include('lib/funcs.php');
include('define.php');
include('menu1.php');

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
    echo '<p>註冊成功</p>';
  }else {
    echo '<p>密碼確認錯誤</p>';
  }
}else {
  echo '<p>欄位不可空白</p>';
}

?>

<link rel="stylesheet" type="text/css" href="lib/all.css">
<body class="background">
</body>
