<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN (write your solution here)
function sumOfSeries($a, $b) {
    if ($a == $b) {
        return $a;
    }

    return $a + sumOfSeries($a+1, $b);
}
// END