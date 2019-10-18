<?php

function linkMysql($i, $j, $k) {
  $a = 'mysql:host=localhost;dbname=' . $i . ';charset=utf8';
  return new PDO($a,$j,$k);
}

$pdo = linkMysql('SHOP', 'root', '1234');

foreach ($pdo->query('select * from Product') as $row) {
  echo '<p>' . $row['id'] . '.' .  $row['name'] . ':' .  $row['price'] . '</p>';
}  


