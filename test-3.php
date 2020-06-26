<?php

function factorial($number) {
    if ($number < 2) {
        return $number;
    } else {
        return $number * factorial($number - 1);
    }
}

echo factorial(1) . "\n";
echo factorial(2) . "\n";
echo factorial(3) . "\n";
echo factorial(4) . "\n";
echo factorial(5) . "\n";
echo factorial(6) . "\n";
echo factorial(7) . "\n";