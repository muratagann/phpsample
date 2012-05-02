<?php
//無名関数

$add = function($v1, $v2) {
    return $v1 + $v2;
};

var_dump($add(1,2));

$array = array('"ダブルクオート"',
                '<tag>',
                '\'シングルクオート\'');
$escaped = array_map(function($value) {
            return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }, $array);
var_dump($escaped);

//クロージャ
$my_pow = function ($times = 2) {
    return function ($v) use (&$times) {
        return pow($v,  $times);
    };
};

$cube = $my_pow(3);

var_dump($cube(1));
var_dump($cube(2));
var_dump($cube(3));
