<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>5章課題</title>
</head>

<body>
  <p>
    <?php
    // 点数をそれぞれの変数に代入
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 合計点を算出
    $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

    // 生徒の数
    $student_count = 10;

    // 平均点を算出
    $average = $total / $student_count;

    // 平均点をブラウザに出力
    echo "平均点は " . $average . " 点です。";
    ?>
  </p>
</body>

</html>