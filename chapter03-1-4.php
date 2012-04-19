<?php
/*
文字列
*/

//シングルクオート
$string1 = 'this is string';

//ダブルクオート
$string2 = "this is string";

//シングルクオートだと変数やエスケープ文字が展開されない
$string3 = 'hi, $string2 \n';

//ダブルオートだと変数やエスケープ文字が展開される
$string4 = "hi, $string2 \n";

$age = 15;

//$ageという変数だが、どこまでが変数だかわからない。
//Notice Undefined variable: $ageyears
//echo "$ageyears old.", PHP_EOL;

echo "${age}years old.", PHP_EOL;

var_dump($string1);
var_dump($string2);
var_dump($string3);
var_dump($string4);
