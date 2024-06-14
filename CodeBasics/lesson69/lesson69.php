<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($str) {
    $length = mb_strlen($str);
    $result = '';

    for ($i = 0; $i < $length; $i += 1) {
        $char = mb_substr($str, $i, 1);
        $result .= mb_strtolower($char) === $char ? mb_strtoupper($char) : mb_strtolower($char);
    }

    return $result;
}
