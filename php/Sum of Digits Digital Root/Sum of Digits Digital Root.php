<?php
function digital_root($number): int{
    $arr = array_map('intval', str_split((string)$number));
    $result = array_sum($arr);
    while($result > 9){
        $arr = str_split((string)$result);
        $arr = array_map('intval', $arr);
        $result = array_sum($arr);
    }
    return $result;
}

// function digital_root($number): int {
//     return $number - 9 * floor(($number - 1) / 9);
// }

// var_dump(digital_root(16));
// var_dump(digital_root(942));
// var_dump(digital_root(132189));
// var_dump(digital_root(493193));