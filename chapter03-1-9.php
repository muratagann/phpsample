<?php
/*
null
*/
function no_return_func() {
}

$null_value = no_return_func();
var_dump($null_value);

$var = 1;
var_dump(isset($var));

$var = null;
var_dump(isset($var));
var_dump($var);

unset($var);
var_dump(isset($var));

//unset()で変数の割り当てを解除した後に参照すると未定義の変数としてNoticeになる
//nullを入れたものは変数として定義されたものとして認識される
//var_dump($var);


