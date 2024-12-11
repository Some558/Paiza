<?php
    // 入力の取得
    $S = trim(fgets($stdin)); // 広告と判定する語
    $N = intval(trim(fgets($stdin))); // メール件数

    $results = [];

    // メールタイトルを読み込み
    for ($i = 0; $i < $N; $i++) {
        $title = trim(fgets($stdin));
        if (strpos($title, $S) !== false) {
            $results[] = "Yes";
        } else {
            $results[] = "No";
        }
    }

    // 結果を出力
    echo implode("\n", $results) . "\n";
?>