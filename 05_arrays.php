<?php

// Create array
$name = ['Groot', 'Starlord', 'Nebula'];

// Print the whole array
echo '<pre>';

var_dump($name);
echo '</pre>';
// Get element by index
echo $name[2]. '<br>';
echo $name[1]. '<br>';
echo $name[0]. '<br>';
// Set element by index

// Check if array has element at index 2

// Append element

// Print the length of the array
echo count ($name);
// Add element at the end of the array
array_push($name , 'Victor');
echo '<pre>';
var_dump($name);
echo '</pre>';
// Remove element from the end of the array
echo array_pop($name);
// Add element at the beginning of the array
array_unshift($name, 'Gbiyede');
echo '<pre>';
var_dump($name); 
echo '</pre>';
// Remove element from the beginning of the array

// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",",$string));
echo '</pre>'; 
// Combine array elements into string
echo implode(" & ", $name);
echo '<br>';
// Check if element exist in the array
var_dump(in_array('Gbiyede', $name));
// Search element index in the array

echo '<pre>';
var_dump(array_search('Groot', $name));
echo '</pre>';
// Merge two arrays
echo '<pre>';
$vegetables = ["Potato","cucumber"];
var_dump(array_merge($name , $vegetables));
var_dump([...$name, ...$vegetables]);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($name);
rsort($vegetables);


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays

// ============================================

// Create an associative array
$person = [
    'name' => 'Tega',
    'surname' => 'Gbiyede',
    'age' => 17,
    'hobbies' => ['Tennis', 'Video games']
];
echo '<pre>';
print_r($person);                                                                                           
echo '</pre>';
// Get element by key
echo $person['name'];
// Set element by key
$person['channel'] = 'None';
echo '<pre>';
print_r($person);
echo '</pre>';
// Null coalescing assignment operator. Since PHP 7.4
if(isset($person['address'])){
    $person['address'] = 'unknown';
}
// Check if array has specific key

// Print the keys of the array
var_dump(array_keys($person));
// Print the values of the array
var_dump(array_keys($person));
// Sorting associative arrays by values, by keys
ksort($person);
asort($person);
// Two dimensional arrays