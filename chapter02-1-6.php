<?php
/*
echo文とvar_dump
*/

$a = 1;
$b = "foo bar";
$c = array(1,2,3);

//int(1) 整数
var_dump($a);

//string(7) "foo bar" 文字列は文字列の長さとその中身が出力される
var_dump($b);

/*
array(3) {
   [0]=>
   int(1)
   [1]=>
   int(2)
   [2]=>
   int(3)
}
*/
var_dump($c);

//演算の評価値 bool(false)
var_dump($a == $b);


