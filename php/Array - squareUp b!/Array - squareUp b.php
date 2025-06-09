<?php
// function squareUp($n){
//     $finalArray = [];
//     for($i = 1; $i <= $n; $i++){
//         for($j = $n; $j > 0; $j--){
//             if($j > $i) array_push($finalArray, 0);
//             else array_push($finalArray, $j);
//         }
//     }
//     return $finalArray;
// }

function squareUp($n){
    $arr = [];
    for($i = 1; $i <= $n; $i++){
        $arr = array_merge($arr, array_fill(0, $n - $i, 0), range($i, 1));
    }
    return $arr;
}

var_dump(squareUp(2));
var_dump(squareUp(3));
var_dump(squareUp(4));
