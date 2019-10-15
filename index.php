<html>
    <head>
        <title>購物網站</title>
    </head>
    <body>
        <form action = 'index2.php' method = 'post'>
            <p>選擇您要的數量</p>
            <select name = 'count'>
                <?php
                    for($i=0 ; $i<10 ; $i++){
                        echo '<option value ="'. $i . '">' . $i .'</option>';
                }
                ?>
            </select>
            <input type = 'submit' value = '送出'> 
        </form>
    </body>  
</html>