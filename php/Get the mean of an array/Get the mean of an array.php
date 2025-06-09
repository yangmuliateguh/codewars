<?php
function get_average($a) {
    $sum = array_sum($a);
    $count = count($a);
    if ($count == 0) return 0;

    return (int)($sum/$count);
}

echo get_average([2, 2, 2, 2]) . PHP_EOL;
echo get_average([1, 2, 3, 4, 5]) . PHP_EOL;
echo get_average([1, 1, 1, 1, 1, 1, 1, 2]) . PHP_EOL;