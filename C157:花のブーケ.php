<?php
// 販売されている花の本数を表す整数を標準入力から取得
$N = (int)trim(fgets(STDIN));

// 花の種類を標準入力から取得し、配列に変換
$flowerKinds = explode(' ', trim(fgets(STDIN)));

// 花の種類を一意にするために配列をセットに変換
$uniqueFlowerKinds = array_unique($flowerKinds);

// 結果としてユニークな花の種類の数を出力
echo count($uniqueFlowerKinds) . "\n";
?>
