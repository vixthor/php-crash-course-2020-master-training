<?php

// Create simple string
$name = 'Groot';
$groot1 = 'Hello I am '.$name. ' and i am 17';
$groot2 = "I am . $name and im 17";
echo $groot1 . '<br>';
echo $groot2 . '<br>';
// String concatenation
echo 'Hello '.'World '. 'And '. 'PHP ';  
// String functions
$string = "                Hello World                 ";
echo "1 -". strlen($string) . '<br>';
echo "2 -". trim($string) . '<br>';
echo "3 -". ltrim($string) . '<br>';
echo "4 -". rtrim($string) . '<br>';
echo "5 -". str_word_count($string) . '<br>';
echo "6 -". strrev($string) . '<br>';
echo "7 -". strtoupper($string) . '<br>';
echo "8 -". ucfirst($string) . '<br>';
echo "9 -".  lcfirst('Hello') . '<br>';
echo "10 -". ucwords('groot') . '<br>';
echo "11 -". strpos($string, "Hello") . '<br>';
echo "12 -". stripos($string, "World" ) . '<br>';
echo "13 -". strtolower($string) . '<br>';
echo "14 -". substr($string, 8) . '<br>';
echo "15 -". str_replace('world', 'PHP' , $string) . '<br>';
echo "16 -". str_ireplace('world', 'PHP' , $string) . '<br>';

// Multiline text and line breaks
$longText = "
    Hello, My name is Groot
        i am 27
    i love myself

";
echo $longText. '<br>';
echo nl2br($longText). '<br>';

// Multiline text and reserve html tags
$longText = "
    Hello, My name is <b>Groot</b> 
        i am <b>27</b>,
    i love myself

";
echo "1 -" . $longText . '<br>';
echo "1 -" . nl2br($longText) . '<br>';
echo "1 -" . htmlentities($longText) . '<br>';
echo "1 -" . nl2br(htmlentities($longText)) . '<br>';
echo "1 -" . html_entity_decode('&lt;b&gt;Groot&lt;/b&gt') . '<br>';
// https://www.php.net/manual/en/ref.strings.php