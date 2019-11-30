<?php

include 'lib/funcs.php';
include 'define.php';

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

?>


<?php include 'lib/header.php'?>
<?php include 'menu2.php'?>
<p style="margin-left:10px;">商品放入購物車成功</p>
<hr>
<?php include('car.php');?>
<?php include 'lib/footer.php';?>


