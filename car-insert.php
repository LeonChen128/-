<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background"></body>

<?php

include('lib.php');
include('define.php');
include('menu2.php');

session_start();

$id = $_POST['id'];

if (!isset($_SESSION['product'])) {
  $_SESSION['product'] = [];
}

$count = 0;
if (isset($_SESSION['product'][$id])) {
  $count = $_SESSION['product'][$id]['count'];
}

$_SESSION['product'][$id] = [
'name'  => $_POST['name'],
'price' => $_POST['price'],
'count' => $count + $_POST['count']
];

echo '<p style="margin-left:10px;">商品放入購物車成功</p>';
echo '<hr>';

include('car.php');


