<?php
// 1 行目で車の数 N と渋滞距離 M を取得
list($N, $M) = explode(' ', trim(fgets(STDIN)));

// 渋滞区間の合計距離を保持する変数
$totalJamDistance = 0;

// N-1 行の車間距離を処理
for ($i = 0; $i < $N - 1; $i++) {
    $distance = (int)trim(fgets(STDIN));
    
    // 車間距離が M 以下なら渋滞距離に加算
    if ($distance <= $M) {
        $totalJamDistance += $distance;
    }
}

// 結果を出力
echo $totalJamDistance . "\n";
?>