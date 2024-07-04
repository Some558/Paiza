//function ある条件の場合はreturnで終わらせる
<?php
function getTriangleArea($base,$height){
    //引数$base/$heightが0以下の場合は、関数を終了
    if($base <=0 || $height<=0){
        return;
    }
    return $base * $height / 2;
    }
$area = getTriangleArea(8,2);
echo $area;
?>
