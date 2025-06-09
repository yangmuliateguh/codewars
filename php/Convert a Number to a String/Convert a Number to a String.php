<?php
function numberToString(int $num) : string
{
  return (string)$num;
}

// 123  --> "123"
var_dump(numberToString(123));
// 999  --> "999"
var_dump(numberToString(999));
// -100 --> "-100"
var_dump(numberToString(-100));
