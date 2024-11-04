<?php
$D = (int)rtrim(fgets(STDIN)); // 日数を取得
$weatherData = explode(' ', rtrim(fgets(STDIN))); // 天気データを配列として取得

$rainbowDays = []; // 虹が見える日を格納する配列

// 1日目からD-1日目までループする（0-indexed）
for ($i = 0; $i < $D - 1; $i++) {
    // 前日が雨（2）かつ当日が晴れ（0）の条件を確認
    if ($weatherData[$i] == 2 && $weatherData[$i + 1] == 0) {
        $rainbowDays[] = $i + 1; // 1日目からの順に出力するためインデックスに1を足す
    }
}

// 結果を出力
if (count($rainbowDays) > 0) {
    echo implode(' ', $rainbowDays) . "\n"; // 半角スペースで区切って出力
} else {
    echo "-1\n"; // 虹が見える日がない場合は -1 を出力
}
?>