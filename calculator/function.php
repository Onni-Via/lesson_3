<?php
assert(calaculator(5,16,'plus'), 21);
assert(calaculator(5,5,'multply'), 25);
assert(calaculator(1,5,'divide'), -0.5);
assert(calaculator(1,1,'minus'), 0);
assert(calaculator(1,0,'minus'), 1);

function calculator($number1, $number2, $operation)
{
    switch ($operation) {
        case 'plus':
            return $number1 + $number2;
            break;
        case 'minus':
            return $number1 - $number2;
            break;
        case 'multply':
            return $number1 * $number2;
            break;
        case 'divide':
            return $number1 / $number2;
            break;
    }
}

