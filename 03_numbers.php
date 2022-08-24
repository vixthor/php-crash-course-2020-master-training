<?php

// Declaring numbers
$a = 4;
$b = 6;
$c = 9;
// Arithmetic operations
echo $a +$b * $c;
echo '<br>';
echo $a % $b;
echo '<br>';
// Assignment with math operators
$a = $a +$b; // same thing
$a += $b;
$a *= $b;
echo $a;
echo '<br>';
// Increment operator
$a++;
echo $a;
echo '<br>';
++$a;
echo $a;

// Decrement operator
echo --$a;
echo $a--;

// Number checking functions
is_float(1.25);
is_double(1.25);
is_int(5);
is_numeric("3.45");
is_numeric("3g.45");
// Conversion
$strNumber = '12.34';
$numeric = (float)$strNumber;
var_dump($strNumber);
// Number functions
echo "abs(-15)" . abs(-15) . '<br>';
echo "pow(2 , 3)" . abs(-15) . '<br>';
echo "max(2 ,3)" . max(2 , 3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
echo "round(2.3)" . round(2.3) . '<br>';
echo "round(2.6)" . round(2.6) . '<br>';
echo "floor(2.6)" . floor(2.6) . '<br>';
echo "ceil(2.4)" . ceil(2.4) . '<br>';
// Formatting numbers
$number = 123456789.123443;
echo number_format($number, 2, '.', ',' );
// https://www.php.net/manual/en/ref.math.php
