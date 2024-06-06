<?php

echo "Hello Word (echo)";

echo "<br>";

print_r("Hello Word (print-r)");

function myFunction() {
    return array(1, 2, 3);
}

echo "<br>";
// Вызываем функцию и выводим результат на экран
print_r(myFunction());

$variable = myFunction();
echo "<br>" . json_encode($variable);