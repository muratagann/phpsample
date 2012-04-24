<?php
/*
foreach
*/

//foreach(反復可能なデータ構造 as キー => 要素)

$fruits_color = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
);

foreach($fruits_color as $name => $color) {
    echo "$name is $color", PHP_EOL;
}

//反復時に参照を用いる

$fruits_color2 = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
);

foreach($fruits_color2 as &$color){
    $color = 'black';
}
//値が保持されているために要素の参照を解除する
unset($color);
var_dump($fruits_color2);
