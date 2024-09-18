<?php
// 連想配列の作成
$personal_data = [
    "id" => 1,
    "名前" => "侍太郎",
    "年齢" => 30
];

// foreach文を使って要素を出力
foreach ($personal_data  as $key => $value) {
  echo $key . "：" . $value . "<br>";
}
?>