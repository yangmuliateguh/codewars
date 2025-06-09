<?php
function rounders(int $value): int {
    $factor = 10;
    while ($value >= $factor){
        $value = round($value / $factor) * $factor;
        $factor *= 10;
    }
    return $value;
}


var_dump(rounders(15)); // 20
var_dump(rounders(1234)); // 1000
var_dump(rounders(1445)); // 2000
var_dump(rounders(14)); // 10
var_dump(rounders(99)); // 100
var_dump(rounders(10)); // 10
