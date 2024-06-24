<?php
$str = "uuこんにちはu\t\n\r";
var_dump($str); //結果:string(21) "uuこんにちはu"
var_dump(trim($str)); //結果:string(15) "こんにちは"
var_dump(ltrim($str)); //結果:string(19) "こんにちはu"
var_dump(rtrim($str)); //結果:string(17) "uuこんにちは"
?>