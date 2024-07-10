<?php

function repeatCharacter($n, $c) {
    return str_repeat($c, $n);
}

// 標準入力から整数nを読み取る
$n = intval(trim(fgets(STDIN)));

// 標準入力から文字cを読み取る
$c = trim(fgets(STDIN));

// 文字cをn回繰り返した文字列を生成し、出力する
$result = repeatCharacter($n, $c);
echo $result . PHP_EOL;

?>

//標準入力練習