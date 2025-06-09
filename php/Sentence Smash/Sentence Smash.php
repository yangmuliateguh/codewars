<?php
// function smash(array $words): string {
//     $result = "";
//     foreach($words as $word){
//         $result .= $word . " ";
//     }
//     return trim($result);
// }

function smash(array $words): string {
    return implode(' ', $words);
}

// ['hello', 'world', 'this', 'is', 'great']  =>  'hello world this is great'
var_dump(smash(['hello', 'world', 'this', 'is', 'great']));
// 'hello'
var_dump(smash(["hello"]));
// 'hello world'
var_dump(smash(["hello", "world"]));