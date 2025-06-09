<?php
function sum(array $a): float {
  return array_sum($a);
}

var_dump(sum([1, 5.2, 4, 0, -1]));
// Input: 
// Output: 9.2

var_dump(sum([]));
// Input: []
// Output: 0

var_dump(sum([-2.398]));
// Input: [-2.398]
// Output: -2.398