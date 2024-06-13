<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN (write your solution here)
function printReversedWordBySymbol($str) {
    $str = strrev($str);
    for ($i = 0; $i < strlen($str); $i += 1) {
        print_r("{$str[$i]}\n");
    }
}
// END