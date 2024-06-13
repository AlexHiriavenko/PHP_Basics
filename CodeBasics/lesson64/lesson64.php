<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str, $index, $len) {
    return $len > 0 && $index >= 0 && strlen($str) >= $len + $index; 
}
// END
