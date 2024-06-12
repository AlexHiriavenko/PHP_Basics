Решение учителя:
<?php

// BEGIN
function truncate($str, $length)
{
    $cuttedString = substr($str, 0, $length);
    return "{$cuttedString}...";
}

// END
// Ваше решение:

// BEGIN (write your solution here)
function truncate1($str, $newLength) {
    return substr($str, 0, $newLength) . "...";
}
// END