<?php
//継承
require_once 'chapter05-1-1.php';

class Programmer extends Employee {

    //parent
    public function __construct($name, $type) {
        parent::__construct($name, $type);
    }

    //親クラスに定義されたメソッドやプロパティを子クラスに同じ名前で定義すると
    //子クラスではそのメソッドの実装を上書きする。オーバーライドという
    public function work() {
        echo 'プログラムを書いています',PHP_EOL;
    }
}

$programmer = new Programmer('山田', Employee::REGULAR);
$programmer->work();
