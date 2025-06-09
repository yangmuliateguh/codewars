<?php
function invert(array $a): array {
  $result = array_map(function($value){
    return -$value;
  }, $a);
  return $result;
}

var_dump(invert([1,2,3,4]));