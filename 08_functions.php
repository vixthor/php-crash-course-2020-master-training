<?php

// Function which prints "Hello I am Zura"

// Function with argument

// Create sum of two functions

// Create function to sum all numbers using ...$nums
/*function sum(...$nums){
    $sum = 0;
    foreach($nums as $n){
        $sum += $n;
    }
    return $sum;
}

echo sum(1, 2, 3,  4, 5 ,6);
*/
// Arrow functions
function sum(...$nums)
{
   return array_reduce($nums, fn($carry, $n) => $carry+ $n );
}
echo sum(1, 2, 3, 44, 5, 6);