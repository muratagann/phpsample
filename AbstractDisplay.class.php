<?php
/*
Template Methodサンプル
*/

//AbstractClassに相当

abstract class AbstractDisplay {

    //表示するデータ
    private $data;

    //コンストラクタ
    //@param mixed 表示するデータ
    public function __construct($data) {
        if(!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    //template methodに相当
    public function display() {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    //データを取得する
    public function getData() {
        return $this->data;
    }

    //ヘッダ表示/サブクラスに実装を任せる抽象メソッド
    protected abstract function displayHeader();

    //ボディ表示/サブクラスに実装を任せる抽象メソッド
    protected abstract function displayBody();
    
    //フッタ表示/サブクラスに実装を任せる抽象メソッド
    protected abstract function displayFooter();

}
