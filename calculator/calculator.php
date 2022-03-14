<?php
assert(calaculator(5,16,'plus'), 21);
assert(calaculator(5,5,'multply'), 25);
assert(calaculator(1,5,'divide'), -0.5);
assert(calaculator(1,1,'minus'), 0);
assert(calaculator(1,0,'minus'), 1);

if (isset($_GET['number1'])) {
    $number1 = $_GET['number1'];
} else {
    $number1 = null;
    echo "Не передан первый аргумент";
}

if (isset($_GET ['number2'])) {
    $number2 = $_GET['number2'];
} else {
    $number2 = null;
    echo "Не передан второй аргумент";
}
$operation = $_GET['operation'] ?? '';

function calculator($number1, $number2, $operation)
{
  /*  $operations = [
        'plus' => $number1 + $number2,
        'minus' => $number1 - $number2,
        'multply' => $number1 * $number2,
        'divide' => $number1 / $number2,
    ];*/

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
          
/*return  isset($operations[$operation]) ? $operations[$operation] : 'Ошибка: оператор не сущевствует';*/
}
return calculator($number1, $number2, $operation);
/*$result = calculator($number1, $number2, $operation);*/
/*<?php echo $result;?>*/