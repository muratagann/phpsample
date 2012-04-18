<?php
/*
変数ののスコープ
グローバルスコープ
*/

echo "グローバルスコープ", PHP_EOL;
//$arrayはすべてのグローバルスコープからアクセス可能
$array = array(1,2,3,4,5);

foreach($array as $i) {
    //foreach文で配列を走査します
    echo $i, PHP_EOL;
}

//foreachを抜けた後も$iは使える
echo "Last: ", $i, PHP_EOL;

echo "ローカルスコープ", PHP_EOL;

$foo = 1;

function some_function() {
    /*
    ここはローカルスコープなのでグローバルの$fooを
    変更したことにはならない。新しい変数を定義したことになる。
    */
    $foo = 10;

    $bar = 20;
}

some_function();

//1
echo $foo, PHP_EOL;

//関数のローカルスコープで定義された変数はグローバルスコープで未定義
//echo $bar, PHP_EOL;
