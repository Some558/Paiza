<?php
$str = "WINGSプロジェクト"
var_dump(str_contains($str, "プロ")); //結果:bool(true)
var_dump(str_starts_with($str, "WINGS")); //結果:bool(true)
var_dump(str_ends_with($str, "WINGS")); //結果:bool(false)
?>