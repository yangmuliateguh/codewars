<?php

function alphabet_position(string $s) : string {
    $result = "";
    $s = strtoupper($s);
    for ($i = 0; $i < strlen($s); $i++){
        if(preg_match("/[A-Za-z]/", $s[$i])) $result .= (ord($s[$i])-64) . " ";
    }
    return trim($result);
}