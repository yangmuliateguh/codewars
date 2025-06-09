<?php
function solution($str) {
    $result = [];
    $len_str = strlen($str);
    if ($len_str % 2 != 0) $str .= '_';
    for ($i = 0; $i < $len_str; $i += 2){
        $pair = substr($str, $i, 2);
        $result[] = $pair;
    }
    return $result;
}

var_dump(solution('abc'));
var_dump(solution('abcdef'));
// * 'abc' =>  ['ab', 'c_']
// * 'abcdef' => ['ab', 'cd', 'ef']

