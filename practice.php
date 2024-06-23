<?php
$str = "にわにはにわにわとりがいる";
print mb_substr_count($str,"にわ"); //結果:3
$str = "いちいちいちばにいる";
print mb_substr_count($str,"いちいち"); //結果:1
?>