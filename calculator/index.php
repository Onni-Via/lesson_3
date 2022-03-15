<?php

include __DIR__ . '/calculator.php';

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

if (isset($_GET['operation'])) {
  $operation = $_GET['operation'];
}

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Калькулятор</title>
</head>
<body>
<form method="get">
  Число 1: <input type="text" name="number1" value="<?php echo $number1; ?>">
  <select name="operation">
    <option value="plus">+</option>
    <option value="minus">-</option>
    <option value="multply">*</option>
    <option value="divide">/</option>
  </select>
  Число 2: <input type="text" name="number2" value="<?php echo $number2; ?>">
  <button type="submit">=</button>
  <?php echo calculator($number1, $number2, $operation);?>
</form>
</form>
</body>
</html>
