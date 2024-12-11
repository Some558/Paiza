<?php
    // 入力の取得
    $S = trim(fgets(STDIN)); // 広告と判定する語
    $N = intval(trim(fgets(STDIN))); // メール件数

    $results = [];

    // メールタイトルを読み込み
    for ($i = 0; $i < $N; $i++) {
        $title = trim(fgets(STDIN));
        if (strpos($title, $S) !== false) {
            $results[] = "Yes";
        } else {
            $results[] = "No";
        }
    }

    // 結果を出力
    echo implode("\n", $results) . "\n";
?>
