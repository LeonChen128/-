<?php

include('lib.php');
include('define.php');
include('menu.php');

session_start();
if (isset($_SESSION['customer'])) {
  unset($_SESSION['customer']);
  echo '您已成功登出';
}else {
  echo '您原本就尚未登入';
}