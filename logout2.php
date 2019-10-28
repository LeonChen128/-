<?php

include('lib.php');
include('define.php');
include('menu1.php');

session_start();
if (isset($_SESSION['customer'])) {
  unset($_SESSION['customer']);
  echo '<p class="notice">您已成功登出</p>';
}else {
  echo '<p class="notice">您尚未登入</p>';
}
?>

<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background"></body>