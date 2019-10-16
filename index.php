<html>
    <head>
        <title>購物網站</title>
    </head>
    <body>
        <form action = 'index2.php' method = 'post'>
            <p>選擇您要點餐的餐點</p>
            <?php
                $meal = ['紅茶',
                         '綠茶',
                         '奶茶',
                         '三明治',
                         '漢堡',
                         '鬆餅',
                         '鐵板麵',
                         '薯餅'
                ];
                foreach($meal as $item){
                    echo '<P><input type = "checkbox" name = "meal[]" value = "'.$item.'">'.$item.'</P>';
            }
            ?>
            <p><input type = 'submit' value = '送出'></p>
        </form>
    </body>  
</html>