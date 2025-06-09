<?php
function mn_lcm(int $m, int $n): int {
    if($m < $n) {
        $temp = $m;
        $m = $n;
        $n = $temp;
    }
    $gcd = function ($m, $n){
        while($n != 0){
            $t = $n;
            $n = $m % $n;
            $m = $t;
        }
        return $m;
    };

    $lcm_all = 1;
    for($i = $m; $i >= $n; $i--){
        $lcm_all = ($lcm_all * $i) / $gcd($lcm_all, $i);
    }

    return $lcm_all;
}

var_dump(mn_lcm(1, 2));
var_dump(mn_lcm(1, 5));
var_dump(mn_lcm(5, 1));
var_dump(mn_lcm(1, 10));
var_dump(mn_lcm(2, 3));
var_dump(mn_lcm(3, 5));
var_dump(mn_lcm(10, 20));
var_dump(mn_lcm(1, 25));
var_dump(mn_lcm(24, 25));