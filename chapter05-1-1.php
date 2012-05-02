<?php
//クラス
class Employee {

    const PARTTIME = 0x01; //アルバイト
    const REGULAR  = 0x02; //正社員
    const CONTRACT = 0x03; //契約社員

    //プロパティ
    private $name;
    //外からアクセス出来ないようにする
    private $state = '働いている';

    public function __construct($name, $state) {
        $this->name = $name;
        $this->state = $state;
    }

    //staticプロパティ
    private static $company = '技術評論社';

    //staticプロパティにアクセス
    public static function getCompany() {
        return self::$company;
    }

    //staticプロパティを変更
    public static function setCompany($value) {
        return self::$company = $value;
    }

    //privateプロパティにアクセス
    public function getName() {
        return $this->name;
    }

    //privateプロパティにアクセス
    public function getState() {
        return $this->state;
    }

    //privateプロパティを変更するメソッド
    public function setState($state){
        return $this->state = $state;
    }

    //メソッド
    public function work() {
        echo '書類を整理している', PHP_EOL;
    }

}

//staticプロパティがpublicの時
//echo '従業員はみんな', Employee::$company, 'に務めています', PHP_EOL;
echo '従業員はみんな', Employee::getCompany(), 'に務めています', PHP_EOL;
Employee::setCompany('あひゃ');
echo '従業員はみんな', Employee::getCompany(), 'に務めています', PHP_EOL;

$yamada = new Employee('山田', Employee::REGULAR);

$yamada->setState('休憩中');
echo  $yamada->getName(), 'さんは', $yamada->getState(), PHP_EOL;
$yamada->work();

