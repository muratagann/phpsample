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

//可変関数
//引数に与えられた名前をもつ関数が存在すれば呼び出す為の関数
function func_caller($name) {
    if(function_exists($name)) {
        $name();
    }
}

function foo() {
    echo "foo called",PHP_EOL;
}

func_caller('foo');

function add($v1, $v2) {
    return $v1 + $v2;
}

class Math {
    public function sub($v1, $v2) {
        return $v1 - $v2;
    }

    public static function add($v1, $v2) {
        return $v1 + $v2;
    }
}

//caller_user_func()関数では、コールバック関数の指定につづいて引数を指定
$a = call_user_func('add', 1,2);
var_dump($a);

//コールバック関数には、無名関数も指定できる
$b = call_user_func(function($v1, $v2){return $v1 + $v2;}, 1, 2);
var_dump($b);

//staticメソッドの場合、クラス名を文字列で指定できる
$c = call_user_func(array('Math', 'add'), 1, 2 );
var_dump($c);

//staticメソッドの場合「クラス名：：メソッド名」という文字列でも指定できる
$d = call_user_func('Math::add', 1,2);
var_dump($d);

//インスタンス変数とメソッド名をする場合
$math = new Math();
$e = call_user_func(array($math, 'add'), 1, 2);
var_dump($e);

//call_user_func_array()では第二引数に配列で引数のリストを指定
$f = call_user_func_array('add', array(1,2));
var_dump($f);
$g = call_user_func_array(array($math, 'sub'), array(1,2));
var_dump($g);











