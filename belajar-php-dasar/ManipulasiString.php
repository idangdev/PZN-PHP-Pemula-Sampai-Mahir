<?php

// DOT OPERATOR

$name = "Eko Kurniawan Khannedy";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// KONVERSI KE NUMBER DAN SEBALIKNYA

$valueString = (string)100;
var_dump($valueString);

// $valueInt = (int)"salah";    => output -> int(0)
$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

// MENGAKSES KARAKTER
$name = "Eko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// VARIABLE PARSING
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

// CURLY BRACE
$var = "Eko";
echo "This is {$var}s" . PHP_EOL;
