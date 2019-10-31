<link rel="stylesheet" type="text/css" href="lib.css">
<body class="background">
</body>

<?php

include('define.php');
include('lib.php');
include('menu3.php');

$pdo = linkMysql();
$sql = $pdo->prepare('DELETE FROM Product WHERE id = ?');
$sql->execute([$_POST['id']]);

echo '<p class="notice">刪除成功!</p>';
