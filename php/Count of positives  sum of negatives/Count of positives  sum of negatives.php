<?php
function countPositivesSumNegatives($input) {
    if (empty($input)) return [];
    
    $pos = 0;
    $neg = 0;

    foreach ($input as $element) {
        if ($element > 0) $pos++;
        else $neg += $element;
    }

    return [$pos, $neg];
}

var_dump(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));