<?php
function find_missing_letter(array $array): string {
    $array = array_map('ord', $array);

    for ($i = min($array); $i <= max($array); $i++){
        if (!in_array($i, $array)) $missing = $i;
    }
    
    return chr($missing);
}

// function find_missing_letter(array $array): string {
//     $start = ord($array[0]);
//     foreach ($array as $key => $char) {
//         if (ord($char) != $start + $key) return chr($start + $key);
//     }
//     return "";
// }


var_dump(find_missing_letter(['a','b','c','d','f']));