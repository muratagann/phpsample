<?php
/*
文字列型とキャスト
*/

if(!isset($argv[1])) {
    exit;
}

$num = $argv[1];

var_dump($num);
//$numは文字列から整数にキャスト
if($num == 100) {
    echo "num is 100", PHP_EOL;
} else {
    echo "num is not 100", PHP_EOL;
}
