<?php

$company1 = 'Apple';
$company2 = 'Samsung';

// BEGIN (write your solution here)
function totalLengthArgsStr(...$args) {
    $totalLength = 0;
    foreach ($args as $arg) {
        $totalLength += strlen($arg);
    }
    return $totalLength;
}

print_r(totalLengthArgsStr($company1, $company2));
// END

// one more

$company1 = 'Apple';
$company2 = 'Samsung';

// BEGIN (write your solution here)
print_r(strlen($company1) + strlen($company2));

// END
