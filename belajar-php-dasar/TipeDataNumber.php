<?php

// TIPE DATA INTEGER

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in number : ";
var_dump(1_241_241_241);

// TIPE DATA FLOATING POINT

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_123.123);

// INTEGER OVERFLOW
// - Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
// - Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point
echo "Integer Overflow : ";
var_dump(9223372036854775807); // 64bit
