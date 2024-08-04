<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPマニュアル課題</title>
</head>
<body>
    <p>
    <?php
    function sort_2way($array, $order) {
        if ($order) {
            // 昇順にソート
            echo '昇順にソートします。<br>';
            // 引数に直接配列を渡す
            sort($array);
        } else {
            // 降順にソート
            echo '降順にソートします。<br>';
            // 引数に直接配列を渡す
            rsort($array);
        }

        // ソート結果を表示
        foreach ($array as $num) {
            echo $num . '<br>';
        }
        // 各ソート毎に改行
        echo '<br>';
    }

    //ソートする配列
    $nums = [15, 4, 18,23,10];

    // 昇順ソートの呼び出し
    sort_2way($nums, true);

    // 降順ソートの呼び出し
    sort_2way($nums, false);
    ?>
    </p>
</body>
</html>