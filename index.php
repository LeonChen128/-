<?php

include ('lib.php');

$pdo = linkMysql('localhost', 'SHOP', 'root', '1234');


foreach ($pdo->query('select * from Product') as $row) {
  echo '<p>' . $row['id'] . '.' .  $row['name'] . ':' .  $row['price'] . '</p>';
}  


