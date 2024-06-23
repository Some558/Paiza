<?php
$data1 = "Wings project";
$data2 = "ＷＩＮＧＳプロジェクト";
$data3 = "FUßball";

print mb_convert_case($data1, MB_CASE_UPPER); //結果:WINGS PROJECT
print mb_convert_case($data1, MB_CASE_LOWER); //結果:wings project
print mb_convert_case($data1, MB_CASE_TITLE); //結果:Wings Project
print mb_convert_case($data2, MB_CASE_LOWER); //結果:ｗｉｎｇｕｓｕプロジェクト
print mb_convert_case($data3, MB_CASE_UPPER); //結果:FUSSBALL
print mb_convert_case($data3, MB_CASE_SIMPLE); //結果:FUßball
?>