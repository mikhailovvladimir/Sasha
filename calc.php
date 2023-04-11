<?php

if (empty($_POST['numberOne'])) {
    return 'Введите число один';
}

if (empty($_POST['numberTwo'])) {
    return 'Введите число два';
}

if (empty($_POST['operation'])) {
    return 'Введите операцию';
}

$numberOne = $_POST['numberOne'];
$numberTwo = $_POST['numberTwo'];
$operation = $_POST['operation'];
$result = $numberOne . ' ' . $operation . ' ' . $numberTwo . ' = ';

$calculation = 0;
if ($operation == '+') {
    $calculation = $numberOne + $numberTwo;
}

if ($operation == '-') {
    $calculation = $numberOne - $numberTwo;
}

return $result . $calculation;