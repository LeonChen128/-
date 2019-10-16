<?php


$postcode = $_POST['postcode'];

if(preg_match('/^[0-9]{7}$/',$postcode)){
    echo '您輸入之'.$postcode.'符合郵遞區號格式';
}else{
    echo '您輸入之'.$postcode.'不符合郵遞區號格式，請重新確認。';
}