<?php
function findMultiples(int $integer, int $limit): array{
    $result = [];
    for($i = 1; $i <= $limit; $i++){
        $ops = $integer * $i;
        if($ops <= $limit) $result[] = $ops;
    }
    return $result;
}

// function findMultiples(int $integer, int $limit): array {
//     $result = [];
//     for ($i = $integer; $i <= $limit; $i += $integer) {
//         $result[] = $i;
//     }
//     return $result;
// }

var_dump(findMultiples(5, 25));
var_dump(findMultiples(1, 2));
var_dump(findMultiples(5, 7));
var_dump(findMultiples(4, 27));
var_dump(findMultiples(11, 54));