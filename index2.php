<?php
if(isset($_REQUEST['meal'])){
    if($_REQUEST['meal']=='中式套餐'){
        echo '您選擇的為中式套餐。';
    }else{
        if($_REQUEST['meal']=='日式套餐'){
          echo '您選擇的為日式套餐。';
        }else{
          echo '您選擇的為西式套餐。';
        }
    }
}else{
    echo '您未選擇任何餐點。';
}