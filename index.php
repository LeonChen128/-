<html>
    <head>
        <title>購物網站</title>
    </head>
    <body>
        <form action = 'index2.php' method = 'post'>
            <p>選擇密碼提示問題</p>
            <select name = 'question'>
                <?php
                    $question = ['家裡電話',
                                 '小學名稱',
                                 '第一輛買的車的品牌',
                                 '第一隻寵物名字',
                                 '最喜歡的電影',
                                 '最喜歡的歌手'];
                    foreach($question as $item){
                        echo '<option value = "' . $item . '">' .$item.'</option>';
                    }
                ?>                 
            </select>
            <p>輸入問題答案</p>
            <p><input type="text" name="answer"></p>
            <p><input type = 'submit' value = '送出'></p> 
        </form>
    </body>  
</html>