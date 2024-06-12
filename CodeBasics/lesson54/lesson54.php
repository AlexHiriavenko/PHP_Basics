<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN (write your solution here)

function whoIsThisHouseToStarks($str) {
    $friends = ['Karstark', 'Tully'];
    $enemies = ['Lannister', 'Frey'];

    if (in_array($str, $friends)) {
        return 'friend';
    } elseif (in_array($str, $enemies)) {
        return 'enemy';
    }

    return 'neutral';
}
// END