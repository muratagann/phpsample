<?php
/*
可変変数
*/

$var = 1;
$var_name = 'var';

/*
$var_nameが評価されてvarになり
$varが評価され1になる
*/
echo $$var_name, PHP_EOL;
