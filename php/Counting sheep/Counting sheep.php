<?php
function countSheep($arr) : int {
    $counter = 0;
    foreach ($arr as $element) {
        if ($element) $counter++;
    }
    return $counter;
}

// function countSheep($arr): int {
//     return count(array_filter($arr, function($value) {
//         return $value === true;
//     }));
// }

// 17
var_dump(countSheep([true, true, true, false, true, true, true, true, true, false, true, false, true, false, false, true, true, true, true, true, false, false, true, true]));