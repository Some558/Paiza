//array_merge
<?php
$ary1 = [1,3,5];
$ary2 = [2,3,6];
$result = array_merge($ary1,$ary2);
print_r($result); //結果:Array([0]=>1 [1]=>3 [2]=>5 [3]=>2 [4]=>3 [5]=>6)

$assoc1 = ["Apple"=>"Red","Orange"=>"Yellow", "Melon"=>"Green"];
$assoc1 = ["Grape"=>"Purple","Apple"=>"Green", "Strawberry"=>"Red"];
$result = array_merge($assoc1,$assoc2);
print_r($result); //結果:Array([Apple]=>Green [Orange]=>Yellow) [Melon]=>Green [Grape]=>Purple [Strawberry]=>Red)
?>
