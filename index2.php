<?php
switch($_POST['meal']){
case '中式套餐':
    echo '春捲、煎餃、蛋花湯、炒飯、杏仁豆腐';
    break;
case '日式套餐':
    echo '烤魚、燉菜、味噌湯、白飯、水果';
    break;
case '西式套餐':
    echo '牛排、薯餅、密米濃湯、麵包、花椰菜';
    break;        
}
echo '將稍後送達。';