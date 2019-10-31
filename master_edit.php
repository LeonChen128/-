<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background">
</body>

<?php

include('define.php');
include('lib.php');
include('menu3.php');

$pdo = linkMysql();
$sql = $pdo->prepare('SELECT * FROM Product');
$sql->execute();
echo '<tr><table class="master_table"><tr class="master_th"><th>商品編號</th><th>商品名稱</th><th>商品價格</th><th>商品圖片</th><th>修改</th><th>刪除</th></tr>';
foreach ($sql->fetchAll() as $row) {
  echo '<tr class="master_td"><form action="master_edit_update.php" method="post">';
  echo '<input type="hidden" name="id" value="' . $row['id'] . '">'; 
  echo '<td>' . $row['id'] . '</td>';
  echo '<td><input type="text" name="name" value="' . $row['name'] . '" class="master_text"></td>';
  echo '<td><input type="text" name="price" value="' . $row['price'] . '" class="master_text"></td>';
  echo '<td><img src="img/' . $row['id'] . '.jpg" class="master_pic"></td>';
  echo '<td><button class="master_update">確定修改</button></td>';
  echo '</form>';
  echo '<form action="master_edit_delete.php" method="post">';
  echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
  echo '<td><button class="master_delete">確定刪除</button></td></form></tr>';
}
echo '</table><table  class="master_table2">';
echo '<tr class="master_th"><th>商品名稱</th><th>商品價格</th><th>上傳圖片</th><th>新增</th></tr>';
echo '<tr class="master_td2"><form action="master_edit_insert.php" method="post" enctype="multipart/form-data">';
echo '<td><input type="text" name="name" class="master_text" placeholder="新建商品名稱"></td>';
echo '<td><input type="text" name="price" class="master_text" placeholder="新建商品價格"></td>';
echo '<td><input type="file" name="file" style="width:150px;"></td>';
echo '<td><button class="master_insert">確定新增</button></td>';
echo '</form></tr></table>';


