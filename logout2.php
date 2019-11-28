<?php

include('lib/funcs.php');
include('define.php');
include('menu1.php');

session_start();
if (isset($_SESSION['customer'])) {
  unset($_SESSION['customer']);
  unset($_SESSION['product']);
  echo '<p>您已成功登出</p>';
}else {
  echo '<p>您尚未登入</p>';
}
?>

<link rel="stylesheet" type="text/css" href="lib/all.css">
<body class="background"></body>