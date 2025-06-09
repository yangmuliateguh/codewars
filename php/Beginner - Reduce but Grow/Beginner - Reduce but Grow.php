<?php
function grow($a) {
    return array_reduce($a, fn($carry, $item) => $carry*$item, 1);
}

var_dump(grow([1, 2, 3, 4])); //24