<?php

//取得../$i資料夾
function thisProjectPath($i) {
  $thisPhpPath = __File__;
  $paths = explode('/', $thisPhpPath);
  array_pop($paths);
  $thisProjectPath = implode('/', $paths);
  return $thisProjectPath . '/' .  $i;
}
//取得$i副檔名
function extGet($i) {
  $name = explode('.', $i);
  return end($name);
}
//上傳檔案 postname, 資料夾, 新檔名
function upload($i, $j, $k) {
  if (is_uploaded_file($_FILES[$i]['tmp_name'])) {
    if (!file_exists(thisProjectPath($j))) {
      mkdir (thisProjectPath($j));
    }
  }
  $originalName = basename($_FILES[$i]['name']);
  $newName = thisProjectPath($j) . '/' . $k . '.' . extGet($originalName);
  if (move_uploaded_file($_FILES[$i]['tmp_name'], $newName)) {
    return '檔案上傳成功';
  }else {
    return '檔案上傳失敗';
  }
}
//連結資料庫 server, database, user, password
function linkMysql($i, $j, $k, $l) {
  $a = 'mysql:host=' . $i . ';dbname=' . $j . ';charset=utf8';
  return new PDO($a, $k, $l);
}


