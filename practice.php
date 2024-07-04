<?php
function hoge(?int $value) : void{
    var_dump($value);
}

hoge(100);
hoge(null);
hoge();
//null許容型