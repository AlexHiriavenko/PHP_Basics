<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN (write your solution here)
function joinNumbersFromRange($a, $b) {
    $res = "{$a}";
    while ($a < $b) {
        $a += 1;
        $res .= $a;
    }
    return $res;
}
// END