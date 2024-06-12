<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

// BEGIN (write your solution here)
function  isPalindrome($str) {
    $str = strtolower($str);
    return strrev($str) === $str;
}

function  isNotPalindrome($str) {
    return !isPalindrome($str);
}
// END