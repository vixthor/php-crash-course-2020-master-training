<?php

// What is a variable


// Variable types
$name = 'Tega';
$Age  = 17;

    

// Declare variables
$name = 'Tega';
$Age = 17;
$isMale = true;
$height = 1.83;
$salary = null;
// Print the variables. Explain what is concatenation
echo $name;
echo '<br>';
echo $Age;
echo '<br>';
echo $isMale;
echo '<br>';
echo $height;
echo '<br>';
// Print types of the variables
echo gettype($name);
echo '<br>';
// Print the whole variable
var_dump($name);
echo '<br>';
var_dump($Age);
// Change the value of the variable
$name = true;
// Print type of the variable

// Variable checking functions
is_string($name);
is_int($Age);
is_bool($isMale);
is_double($height);
// Check if variable is defined
isset($name);
isset($address);

// Constants
define("PI" , 3.142);
echo PI;
echo '<br>';
// Using PHP built-in constants
echo SORT_ASC . '<br>'; 
echo PHP_INT_MAX. '<br>';