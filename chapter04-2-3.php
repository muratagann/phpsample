<?php
/*
関数の呼び出し
*/

$array = array(1,2,3,4,5);
$first_value = array_shift($array);
var_dump($array);
var_dump($first_value);

//コールバック関数
$arr = array(1,1.5,"2",true,);
$new_array = array_map('strval', $arr);
var_dump($new_array);
