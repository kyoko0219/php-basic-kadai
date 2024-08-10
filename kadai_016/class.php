<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP16章課題</title>
</head>

<body>
    <p>
        <?php
        // クラス定義
        class Food {
            // プロパティ定義
            private $name;
            private $price;

            // メソッドを定義
            // set
            public function set_name(string $name) {
                $this->name = $name;
            }

            public function set_price(string $price) {
                $this->price = $price;
            }

            // show
            public function show_price() {
                echo $this->price . '<br>';
            }

            public function show_name() {
                echo $this->name . '<br>';
            }

            // コンストラクタの定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);


        // クラス定義
        class Animal {
            // プロパティ定義
            private $name;
            private $height;
            private $weight;

            // メソッドを定義
            // set
            public function set_name(string $name) {
                $this->name = $name;
            }

            public function set_height(string $height) {
                $this->height = $height;
            }

            public function set_weight(string $weight) {
                $this->weight = $weight;
            }

            // show
            public function show_name() {
                echo $this->name . '<br>';
            }

            public function show_height() {
                echo $this->height . '<br>';
            }

            public function show_weight() {
                echo $this->weight . '<br>';
            }

            // コンストラクタの定義
            public function __construct(string $name,int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);


        $food->show_price();
        echo '';

        $animal->show_height();
        echo '<br>';
        ?>
    </p>
</body>
</html>