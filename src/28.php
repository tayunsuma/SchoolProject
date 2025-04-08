<?php
// Define constants for PHP version information and error handling
define("PHP_VERSION", "7.4.26");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to demonstrate basic file operations in PHP
function printHelloWorld() {
    echo "Hello, World!";
}

printHelloWorld();

// Example of using PHP functions and variables within a script

// Define a function that takes an array as input and prints the first element
function extractFirstElement($array) {
    return $array[0];
}

$array = [1, 2, 3, 4, 5];

$firstElement = extractFirstElement($array);
echo "The first element is: $firstElement";

// Example of using PHP variables in a script

// Define a variable and set its value
$name = "Alice";

// Access the variable using a dot notation or bracket notation
echo "Hello, my name is $name. How are you today?" . "\n";
