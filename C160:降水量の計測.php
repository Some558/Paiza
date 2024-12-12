<?php
// 箱の数を標準入力する
$N = trim(fgets(STDIN)) ;
// それぞれの水深を標準入力する
$waterdeep = explode(' ', rtrim(fgets(STDIN)));
// 合計水深を入れる枠を作る
$totalwaterdeep = 0; 
// それぞれの水深を箱の数だけ繰り返し取り出し、＋していく
    for ($i = 0; $i < $N; $i++) {
        $totalwaterdeep += $waterdeep[$i];
    }
// 合計水深を箱の数で割る
$lastdeep = ceil($totalwaterdeep / $N);
// 出力する
echo $lastdeep . "\n";
?>