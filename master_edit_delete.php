<link rel="stylesheet" type="text/css" href="lib/all.css">
<body class="background">
</body>

<?php

include('define.php');
include('lib/funcs.php');
include('menu3.php');

$pdo = linkMysql();
$sql = $pdo->prepare('DELETE FROM Product WHERE id = ?');
$sql->execute([$_POST['id']]);

echo '<p>刪除成功!</p>';
