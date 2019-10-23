<?php

include('lib.php');
include('define.php');

$pdo = linkMysql();
$sql = $pdo->prepare('DELETE FROM Product WHERE id = ?');
if ($sql->execute([$_REQUEST['id']])) {
  echo '刪除成功';
}else {
  echo '刪除失敗';
}
