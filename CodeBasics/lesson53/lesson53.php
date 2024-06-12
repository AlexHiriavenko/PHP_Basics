<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN (write your solution here)
function normalizeUrl($url) {
    if (str_starts_with($url, "https://")) {
        return $url;
    } else {
    $isProtocolExist = substr($url, 0, 7) === "http://";
    return $isProtocolExist ? str_replace("http://", "https://", $url) : "https://" . $url;
    }
}
// END

print_r(normalizeUrl('https://google.com'));