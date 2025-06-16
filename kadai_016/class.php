<?php
    class Food {
        // プロパティを定義する
        public $name;
        public $price;

        // 「price」プロパティの値を出力する「show_price」メソッドを
        public function show_price (){
            echo $this->price . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price; 
        }
    }

    // それぞれのクラスを元に任意の引数を渡してインスタンスを作成します
    $apple = new Food ('りんご',100);

    // print_r関数を使いそれぞれのインスタンスを出力します。
    print_r($apple);

    // それぞれのクラスに作成したメソッドにアクセスしメソッドを実行します。
    $apple->show_price();



    class Animal {
        // プロパティを定義する
        public $name;
        public $height;
        public $weight;

        // 「height」 プロパティの値を出力する「show_height」メソッドを
        public function show_height(){
            echo $this->height . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this-> weight = $weight;
        }
    }

    // それぞれのクラスを元に任意の引数を渡してインスタンスを作成します
    $dog = new Animal ('犬',100,100);

    // print_r関数を使いそれぞれのインスタンスを出力します。
    print_r($dog);

    // それぞれのクラスに作成したメソッドにアクセスしメソッドを実行します。
    $dog->show_height();
?>