<?php

namespace HexletBasics\Conditionals\SwitchStatement;

// BEGIN (write your solution here)
function getNumberExplanation($num) {
    switch ($num) {
        case 666:
            return "devil number";
        case 42:
            return "answer for everything";
        case 7: 
            return "prime number";
        default: 
            return "just a number";
    }
}
// END