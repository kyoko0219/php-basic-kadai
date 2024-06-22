<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>5章課題</title>
</head>

<body>
    <p>
        <?php
        // 合計を求める
        $score = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);
        $total = array_sum($score);

        // 平均を求める
        $average = array_sum($score) / count($score);
        echo $average;

        ?>





    </p>
</body>
</html>
