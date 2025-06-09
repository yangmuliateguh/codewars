<?php
function makeNegative($num) {
    if($num < 0 ) return $num;
    else return - $num;
}

echo makeNegative(1) . PHP_EOL;    // return -1
echo makeNegative(-5). PHP_EOL;   // return -5
echo makeNegative(0). PHP_EOL;    // return 0
echo makeNegative(0.12). PHP_EOL; // return -0.12