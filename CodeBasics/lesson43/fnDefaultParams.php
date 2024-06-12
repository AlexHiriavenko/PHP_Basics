// Решение учителя:
<?php

// BEGIN
function getHiddenCard($cardNumber, $starsCount = 4)
{
    $visibleDigitsLine = substr($cardNumber, 12);
    return str_repeat('*', $starsCount) . $visibleDigitsLine;
}
// END


// Ваше решение:

// BEGIN (write your solution here)
function getHiddenCard1($cardSerialNum, $hiddenSymbolsNum = 4) {
    $truncCardNum = substr($cardSerialNum, -4);
    $hiddenSymbols = str_repeat("*", $hiddenSymbolsNum);
    return $hiddenSymbols . $truncCardNum;
}
// END