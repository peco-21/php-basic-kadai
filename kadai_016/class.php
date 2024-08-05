<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP16章課題</title>
</head>

<body>
  <p>
    <?php
    // Foodクラスの定義
    class Food {
      public $name;
      public $price;

      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price() {
        echo $this->price . '<br>';
      }
    }

    // Animalクラスの定義
    class Animal {
      public $name;
      public $height;
      public $weight;

      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
        echo $this->height . '<br>';
      }
    }

    // Foodクラスのインスタンス作成
    $food = new Food("potato", 250);

    // Animalクラスのインスタンス作成
    $animal = new Animal("dog", 60, 5000);

    // インスタンスをprint_r関数で出力
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // 各クラスのメソッドを実行して出力
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>

</html>
