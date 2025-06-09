<?php
function cubeChecker($volume, $side){
    if ($side <= 0) return false;
    return ($volume % $side == 0) && ($volume / $side == $side * $side);
  }