<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array, $order) {
          if ($order) {
            echo "昇順にソートします。<br>";
            sort($array); // 昇順にソート
          } else {
            echo "降順にソートします。<br>";
            rsort($array); // 降順にソート
          }
        
          // ソートした配列のデータを1行ずつ表示
          foreach ($array as $value) {
            echo $value . "<br>";
          }
        }
        
        // 配列を定義
        $nums = [15, 4, 18, 23, 10];
        
        // 関数を呼び出し
        sort_2way($nums, true); // 昇順にソート
        sort_2way($nums, false); // 降順にソート
        ?>
    </p>
</body>

</html>
