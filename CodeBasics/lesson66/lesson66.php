<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN (write your solution here)
function makeItFunny($str, $num) {
    $res = "";

    for ($i = 0; $i < strlen($str); $i += 1) {
        $res .= ($i+1) % $num === 0 ? strtoupper($str[$i]) : $str[$i];
    }
    return $res;
}
// END