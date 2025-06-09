<?php
function maps($x){
    return array_map(fn($value) =>  $value *2, $x);
}

var_dump(maps([1,2,3]));
// [1, 2, 3] --> [2, 4, 6]