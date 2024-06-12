<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($nums, $costs) {
    return $nums ?: $costs * 3;
}
// END