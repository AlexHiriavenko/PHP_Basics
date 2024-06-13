<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN (write your solution here)
function filterString($str, $char) {
    $str = str_replace($char, "", $str);
    return $str;
}
// END