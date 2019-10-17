<?php

function checkbox($i, $j) {
  return '<p><input type="checkbox" name="' . $i . '">' . $j . '</p>';
}

$aaa = [checkbox('meal[]', '紅茶'),
        checkbox('meal[]', '綠茶'),
        checkbox('meal[]', '咖啡')
];

foreach($aaa as $key => $value) {
  echo $value;
}

echo '<input type="submit" value="送出">';


