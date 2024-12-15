// 標準入力する
$S = trim(fgets(STDIN));

// 母音を定義
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

// 子音を蓄積する変数
$consonants = '';

// 文字列を一文字ずつ処理
$S1 = str_split($S);
foreach ($S1 as $char) {
    if (!in_array($char, $vowels)) {
        $consonants .= $char;
    }
}

// 結果を出力
echo $consonants . "\n";
