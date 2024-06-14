<?php

namespace HexletBasics\Dates\DateFunction;

function getCustomDate($timestamp)
{
    // BEGIN (write your solution here)
    return date("d/m/Y", $timestamp); 
    // END
}

function getCustomDate2($timestamp)
{
    // BEGIN (write your solution here)
    return date("D/M/Y", $timestamp); 
    // END
}

print_r(getCustomDate(1532435204)); // 24/07/2018
echo "<br>";
print_r(getCustomDate2(1532435204)); // Tue/Jul/2018