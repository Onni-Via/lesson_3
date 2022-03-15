<?php
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

