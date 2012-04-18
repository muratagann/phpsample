<?php
/*
sampleプログラム写経
*/

//乱数を取得
$number = rand();

if($number%2 == 0) {
    echo $number, "は偶数です。",PHP_EOL;
} else {
    echo $number, "は奇数です。",PHP_EOL;
}
