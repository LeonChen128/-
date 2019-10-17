<?php

class radio {
  public $name;
  public $text;
}

$a = new radio();
$a->name = 'meal';
$a->text = '紅茶';

$b = new radio();
$b->name = 'meal';
$b->text = '綠茶';

$c = new radio();
$c->name = 'meal';
$c->text = '咖啡';

$abc = [$a, $b, $c];

foreach($abc as $key => $value) {
  echo '<p><input type="radio" name="' . $value->name . '">' . $value->text . '</p>';
}

echo '<input type="submit" value="送出">';
