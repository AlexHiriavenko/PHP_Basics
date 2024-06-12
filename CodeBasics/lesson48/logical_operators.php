<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN (write your solution here)
function isLeapYear($year) {
    return $year % 400 === 0 || ($year % 4 ===0 && $year % 100 !== 0);
}
// END