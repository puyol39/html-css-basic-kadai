<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
    <?php

    function sort_2way($array, $order) {
        if($order) {
            echo '昇順にソートします。<br>';
            sort($array);
        } else {
            echo '降順にソートします。<br>';
            rsort($array);
        }

        foreach ($array as $num) {
            echo $num . '<br>';
        }
    }

    // ソートしたい配列を定義
    $nums = [15, 4, 18, 23, 10];

    // 関数を呼び出す
    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);

    ?>
    </p>
  </body>
</html>