<?php
$str = "  こんにちはu\t\n\r";
var_dump($str); //結果:string(21) "  こんにちは "
var_dump(trim($str)); //結果:string(15) "こんにちは"
var_dump(ltrim($str)); //結果:string(19) "こんにちは "
var_dump(rtrim($str)); //結果:string(17) "  こんにちは"

$str2 = "!===== [独習PHP] =====!";
var_dump(trim($str2,"!=[]")); //結果:string(9) "独習PHP"
?>