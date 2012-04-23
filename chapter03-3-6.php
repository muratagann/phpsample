<?php
/*
配列の演算
*/

$a = array('a' => 1, 'b' => 3, 'c' => 5);
$b = array('a' => 1, 'c' => 5, 'b' => 3);
$c = array('a' => 1, 'b' => 2);

var_dump($a == $b);

var_dump($a === $b);

var_dump($a + $c);

var_dump($c + $a);
