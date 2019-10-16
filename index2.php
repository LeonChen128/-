<?php
$_POST['answer'] = trim($_POST['answer']);
if(isset($_POST['answer'])&& $_POST['answer'] !=''){
    switch($_POST['question']){
    case '家裡電話':
        if($_POST['answer']=='3345678'){
            echo '密碼為1234';
        }else{
            echo '答案輸入錯誤';
        }
        break;
    case '小學名稱':
        if($_POST['answer']=='仙草國小'){
            echo '密碼為1234';
        }else{
            echo '答案輸入錯誤';
        }
        break;
    case '第一輛買的車的品牌':
        if($_POST['answer']=='豐田'){
            echo '密碼為1234';
        }else{
            echo '答案輸入錯誤';
        }
        break;
    case '第一隻寵物名字':
        if($_POST['answer']=='國瑜'){
            echo '密碼為1234';
        }else{
            echo '答案輸入錯誤';
        }
        break;
    case '最喜歡的電影':
        if($_POST['answer']=='整人專家'){
            echo '密碼為1234';
        }else{
            echo '答案輸入錯誤';
        }
        break;
    case '最喜歡的歌手':
        if($_POST['answer']=='蔡依林'){
            echo '密碼為1234';
        }else{
            echo '答案輸入錯誤';
        }
        break;                     
    }
}else{
    echo '您未輸入任何答案';
}    