<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP16章課題</title>
</head>

<body>
  <p>
    <?php
    class Food {
      public $name;
      public $price;
    
      // コンストラクタ
      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }
    
      // priceプロパティの値を出力するメソッド
      public function show_price() {
        return $this->price;
      }
    }
    
    class Animal {
      public $name;
      public $height;
      public $weight;
    
      // コンストラクタ
      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    
      // heightプロパティの値を出力するメソッド
      public function show_height() {
        return $this->height;
      }
    }
    
    // Foodクラスのインスタンスを作成
    $food = new Food("potato", 250);

    // Animalクラスのインスタンスを作成
    $animal = new Animal("dog", 60, 5000);

    // インスタンスの出力
    print_r($food);
    echo "<br>";
    print_r($animal);
    echo "<br>";

    // メソッドの呼び出し
    echo $food->show_price() . "<br>";
    echo $animal->show_height() . "<br>";
    ?>
  </p>
</body>

</html>
