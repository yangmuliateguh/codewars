<?php
// function reverseSeq ($n) {
//     $result = array();
//     for($i = $n; $i > 0; $i--){
//         array_push($result, $i);
//     }
//     return $result;
// };

function reverseSeq($n) {
    return range($n, 1);
}

var_dump( reverseSeq(5));
// var_dump(reverseSeq($5)) // [5,4,3,2,1]