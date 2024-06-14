<?php

// phpinfo();

function startsWith($text, $substr)
{
    return mb_strpos($text, $substr) === 0;
}

// Тесты
echo startsWith('Хекслет', 'ет') ? 'true' : 'false'; // должно вывести 'false'
echo '<br>';
echo startsWith('Хекслет', 'Хек') ? 'true' : 'false'; // должно вывести 'true'
echo '<br>';
echo var_export(startsWith('Хекслет', 'ет'), true);
echo '<br>';
echo var_export(startsWith('Хекслет', 'Хек'), true);