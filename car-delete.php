<link rel="stylesheet" type="text/css" href="lib/all.css">
<body class="background"></body>

<?php

include('menu2.php');

session_start();

$id = $_REQUEST['id'];

unset($_SESSION['product'][$id]);

echo '<p style="margin-left:10px;">已移除所選商品</p>';

echo '<hr>';

include('car.php');
