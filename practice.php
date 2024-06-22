<?php
$str = "WINGSプロジェクト"
print mb_substr($str,5,2);//結果:プロ
print mb_substr($str,5);//結果:プロジェクト
print mb_substr($str,5,-4);//結果:プロ
print mb_substr($str,5,2);//結果:プロ
?>