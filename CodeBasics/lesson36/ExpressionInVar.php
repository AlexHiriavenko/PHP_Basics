<?php

$text = 'Never forget what you are, for surely the world will not';

// BEGIN (write your solution here)
$res = <<<EOT
First: {$text[0]}
Last: {$text[strlen($text) - 1]}
EOT;
print_r($res);
// END