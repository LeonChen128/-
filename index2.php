<?php
if(isset($_POST['meal'])){
    foreach($_POST['meal'] as $item){
        echo '<p>'.$item.'</P>';
    }
    echo '以上餐點已開始準備，請稍候謝謝。';
}else{
    echo'您未選擇任何餐點';
}