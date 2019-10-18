<?php

function thisProjectPath($i) {
  $thisPhpPath = __File__;
  $paths = explode('/', $thisPhpPath);
  array_pop($paths);
  $thisProjectPath = implode('/', $paths);
  return $thisProjectPath . '/' .  $i;
}

function extGet($i) {
  $name = explode('.', $i);
  return end($name);
}

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

echo upload('file', 'upload', '新檔名');

