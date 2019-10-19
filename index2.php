
<table>
  <tr>
  <th>商品編號</th>
  <th>商品名稱</th>
  <th>商品價格</th>
  </tr>

<?php

include ('lib.php');

$pdo = linkMysql('localhost', 'SHOP', 'root', '1234');

$keyword = trim($_POST['keyword']);

$sql = 'select * from Product where name like "%' . $keyword . '%"';

foreach ($pdo->query($sql) as $row) {
  echo '<tr>';
  echo '<td>' . $row['id'] . '</td>';
  echo '<td>' . $row['name'] . '</td>';
  echo '<td>' . $row['price'] . '</td>';
  echo '</tr>';
}

?>

</table>