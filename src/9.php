<?php
// Function to get a random number between 1 and 50
function get_random_number() {
    return rand(1, 50);
}

// Function to get a random color
function get_random_color() {
    $colors = array('red', 'green', 'blue', 'yellow');
    return $colors[array_rand($colors)];
}

// Function to get a random fruit
function get_random_fruit() {
    $fruits = array('apple', 'banana', 'orange', 'mango');
    return $fruits[array_rand($fruits)];
}

// Function to get a random vegetable
function get_random_vegetable() {
    $vegetables = array('carrot', 'potato', 'broccoli', 'cauliflower');
    return $vegetables[array_rand($vegetables)];
}

// Function to get a random animal
function get_random_animal() {
    $animals = array('lion', 'tiger', 'elephant', 'monkey');
    return $animals[array_rand($animals)];
}

// Function to get a random number between 1 and 50
function get_random_number() {
    return rand(1, 50);
}
?>