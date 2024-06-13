<?php

namespace HexletBasics\Loops\AgregationNumber;

// через рекурсию

// BEGIN (write your solution here)
function multiplyNumbersFromRange($a, $b) {

    if ($a == $b ) {
        return $a;
    }

    return $a * multiplyNumbersFromRange($a + 1, $b);
}
// END

echo multiplyNumbersFromRange(1, 5);
echo multiplyNumbersFromRange(6, 6);
echo multiplyNumbersFromRange(2, 6);

// через While
function mnfr($a, $b) {
  
  $res = $a;

  while ($a < $b) {
    $a += 1;
    $res *= $a;
  }

  return $res;
}


function multiplyNumbersFromRange2($start, $finish)
{
    $i = $start;
    $result = 1;

    while ($i <= $finish) {
        $result = $result * $i;
        $i = $i + 1;
    }

    return $result;
}

echo multiplyNumbersFromRange2(2, 2);