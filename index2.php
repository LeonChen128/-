<?php
switch($_POST['seat']){
case '自由座':
    echo $_POST['seat'] .'價格為500元。';
    break;
case '對號座':
    echo $_POST['seat'] . '價格為900元。';
    break;
case '商務艙':
    echo $_POST['seat'] . '價格為1300元。';
    break;        
}