<?php
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));

$number1 = filter_var($input1, FILTER_VALIDATE_INT);
$number2 = filter_var($input2, FILTER_VALIDATE_INT);

if ($number1 === false) {
    fwrite(STDERR, "Ошибка: введено не целое число\n");
    exit(1);
}

if ($number2 === false) {
    fwrite(STDERR, "Ошибка: введено не целое число\n");
    exit(1);
}

if ($number2 == 0) {
    fwrite(STDERR, "Ошибка: деление на ноль\n");
    exit(1);
}

echo $number1 / $number2 . PHP_EOL;
