<?php
/*
PHPの型
整数
*/

//正の整数
$int1 = 1;

//負の整数
$int2 = -1;

//8進表記で代入
$int3 = 011;

//16進表記で代入
$int4 = 0xff;

//整数型の最大値
$int5 = PHP_INT_MAX;

//整数型の最大値を超えた数は自動的に
//浮動小数点数型floatに変換
$int6 = PHP_INT_MAX + 1;

//整数型へのキャスト
$int7 = intval("1");
$int8 = (int)"1";

var_dump($int1);
var_dump($int2);
var_dump($int3);
var_dump($int4);
var_dump($int5);
var_dump($int6);
var_dump($int7);
var_dump($int8);


