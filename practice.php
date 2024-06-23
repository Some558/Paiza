<?php
$data = "リオとニンザブロウとナミとリンリン";
print_r(explode("と", $data));
    //結果:Array([0]=>リオ [1]=>ニンザブロウ [2]=>ナミ [3]=>リンリン)
print_r(explode("や", $data));
    //結果:Array([0]=>リオとニンザブロウとナミとリンリン)
print_r(explode("と", $data.2));
    //結果:Array([0]=>リオ [1]=>ニンザブロウとナミとリンリン)
print_r(explode("と", $data, -2));
    //結果:Array([0]=>リオ [1]=>ニンザブロウ)
?>