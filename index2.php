<?php

if (isset ($_POST['password'])) {
  $password = $_POST['password'];
  if (preg_match ('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}/', $password)) {
    echo $password . '符合密碼格式。';
  }else {
    echo $password . '不符合密碼格式，請重新輸入。';
  }
}else {
  echo '尚未輸入任何密碼';
}