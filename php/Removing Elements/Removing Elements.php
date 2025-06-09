<?php
function removeEveryOther($array) {
    return array_filter($array, function($key) {
          return ($key + 1) % 2 != 0;
      }, ARRAY_FILTER_USE_KEY);
  }
$x = ["Keep", "Remove", "Keep", "Remove", "Keep"];
var_dump(removeEveryOther($x)); 
// array(3) {
//     [0]=>
//     string(4) "Keep"
//     [2]=>
//     string(4) "Keep"
//     [4]=>
//     string(4) "Keep"
//   }