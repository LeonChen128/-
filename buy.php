<link rel="stylesheet" type="text/css" href="lib/all.css">
<body class="background"></body>

<?php
include('define.php');
include('lib/funcs.php');
include('menu2.php');

session_start();
echo '<p style="margin-left:10px">姓名：' . $_SESSION['customer']['name'] . '</p>';
echo '<p style="margin-left:10px">地址：' . $_SESSION['customer']['address'] . '</p>';
echo '<hr>';
include('car.php');
echo '<hr>';
echo '<p style="margin-left:10px;font-size:20px;">是否結帳</p>';
echo '<a href="buy-insert.php" style="margin-left:10px;font-size:20px;text-decoration:none;border:0px solid;background:rgb(51,122,183);color:rgb(255,255,255);padding:5px;border-radius:3px;">確定</a>';