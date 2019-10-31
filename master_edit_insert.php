<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background">
</body>

<?php

include('define.php');
include('lib.php');
include('menu3.php');

$name  = htmlspecialchars(trim($_POST['name']));
$price = htmlspecialchars(trim($_POST['price']));

$pdo = linkMysql();

$uploadPath = thisProjectPath('img');
if (!file_exists($uploadPath)) {
  mkdir ($uploadPath);
}
if (isset($_POST['name'], $_POST['price']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
  $sql = $pdo->prepare('INSERT INTO Product VALUES(null,?,?)');
  $sql->execute([$name, $price]);
  $sql_sel = $pdo->prepare('SELECT max(id) FROM Product');
  $sql_sel->execute();
  foreach ($sql_sel->fetchAll() as $row) {
    $newid = $row['max(id)'];
  }
  $file = $uploadPath . '/' . $newid . '.jpg';
  if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
    echo '<p class="notice">檔案上傳成功</p>';
  }
}else {
  echo '<p class="notice">輸入欄位及圖片上傳未正確操作</p>';
}