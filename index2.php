<?php

include('lib.php');
include('define.php');

$pdo = linkMysql();
switch($_POST['command']) {
  case 'insert':
    $sql = $pdo->prepare('INSERT INTO Product VALUES(null, ?, ?)');
    $sql->execute([$_POST['name'], $_POST['price']]);
    echo '新增成功';
    break;
  case 'update':
    $sql = $pdo->prepare('UPDATE Product SET name=?, price=? WHERE id=?');  
    $sql->execute([$_POST['name'], $_POST['price'], $_POST['id']]);
    echo '修改成功';
    break;
  case 'delete';
    $sql = $pdo->prepare('DELETE FROM Product WHERE id=?');
    $sql->execute([$_POST['id']]);
    echo '刪除成功';
    break;  
}