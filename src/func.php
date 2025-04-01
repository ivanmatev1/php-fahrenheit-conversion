<?php

function convertCelsiusToFahrenheit($celsius)
{
    if ($celsius === 'cold') {
        return 'freezing';
    }

    if (! is_numeric($celsius)) {
        throw new InvalidArgumentException("Input must be a number or 'cold'.");
    }

    return ($celsius * 9 / 5) + 32;
}
