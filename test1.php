<?php

$string = "a (b c (d e (f) g) h) i (j k)";

function findClosingParenthesis($string, $index)
{
    $array = str_split($string);
    $parenthesisCount = 0;
    $closingParenthesisIndex = 0;
    for ($i = $index; $i <= count($array); $i++) {
        $char = $array[$i];
        if ($char === "(") $parenthesisCount++;

        if ($char === ")") $parenthesisCount--;

        if ($parenthesisCount === 0) {
            $closingParenthesisIndex = $i;
            break;
        }
    }
    return $closingParenthesisIndex;
}

echo findClosingParenthesis($string, 2) . PHP_EOL;
// $string[20];
