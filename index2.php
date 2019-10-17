<?php

$thisPhpPath = __File__;

$paths = explode('/', $thisPhpPath);
array_pop ($paths);
$thisProjectPath = implode('/', $paths);
$uploadPath = $thisProjectPath . '/upload';


if (is_uploaded_file ($_FILES['file']['tmp_name'])) {
  if (!file_exists ($uploadPath)) {
    mkdir ($uploadPath);
  }
  $file = $uploadPath .'/' .  basename ($_FILES['file']['name']);
  if (move_uploaded_file ($_FILES['file']['tmp_name'], $file)){
    echo $file . '上傳成功';
    echo '<p><img src="/購物網站/upload/中式套餐.jpg"></p>';
  }else {
    echo '上傳失敗';
  }
}else {
  echo '請選擇檔案';
}


