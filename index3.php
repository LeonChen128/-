<?php

function upload($i, $j, $k) { //name, 資料夾, 新名稱
  $thisPhpPath = __File__;
  $paths = explode('/', $thisPhpPath);
  array_pop($paths);
  $thisProjectPath = implode('/', $paths);
  $uploadPath = $thisProjectPath . '/' . $j;


  if (is_uploaded_file ($_FILES[$i]['tmp_name'])) {
    if (!file_exists ($uploadPath)) {
      mkdir ($uploadPath);
    }
    $originalname = basename($_FILES['file']['name']);
    $explode = explode('.', $originalname);
    $ext = end($explode);
    $file = $uploadPath .'/' . $k . '.' . $ext;
    if (move_uploaded_file ($_FILES[$i]['tmp_name'], $file)){
      return $file . '上傳成功';     
    }else {
      return '上傳失敗';
    }
  }else {
    return '請選擇檔案';
  }
}

upload('file', 'upload', '123');


