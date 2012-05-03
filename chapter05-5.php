<?php
//例外

function div($v1, $v2) {
    if($v2 === 0) {
        throw new Exception("arg #2 is zero");
    }
    return ($v1/$v2);
}

try {
    echo div(1,2), PHP_EOL;
    echo div(1,0), PHP_EOL;
    echo div(2,1), PHP_EOL;
} catch(Exception $e) {
    echo 'Exception!', PHP_EOL;
    echo $e->getMessage(), PHP_EOL;
}
