<?php
$str = "WINGSプロジェクト"
print mb_strstr($str,"S",true);//結果:WINF
print mb_strstr($str,"S");//結果:Sプロジェクト
print mb_strstr($str,"M",false);//結果:false（表示されない）
?>