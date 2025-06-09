<?php
// function monkeyCount($n) {
//     $result = [];
//     for($i = 1; $i <= $n; $i++){
//         array_push($result, $i);
//     }
//     return $result;
// }

function monkeyCount($n) {
    return range(1, $n);
}

var_dump(monkeyCount(10));

// 10 --> [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
//  1 --> [1]