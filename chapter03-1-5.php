<?php
/*
論理型
PHPがfalseと判断する7つのもの
false(論理型)
0(整数型)
0.0(浮動小数点型)
空の文字列(""),文字列のゼロ("0")
要素の数がゼロの配列
null(値がセットされていない変数を含む)
空のタグから作成されたSimpleXMLオブジェクト
*/


$boolean1 = (bool)1;
$boolean2 = (bool)0;

var_dump($boolean1);
var_dump($boolean2);
