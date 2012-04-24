<?php
/*
continue
*/

$dice = range(1,6);
shuffle($dice);
foreach($dice as $value) {
    if($value % 2 != 0) {
        continue;
    }
    echo $value, PHP_EOL;
}


