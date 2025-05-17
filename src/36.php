<?php
// Initialize the database connection
$pdo = new PDO('mysql:host=localhost;dbname=schoolproject', 'root', '');

// Check if there are any errors in the database connection
if ($pdo->connect_error) {
    die("Database connection failed: " . $pdo->connect_error);
}

// Execute a query to find all students with an average score greater than 60
$students = $pdo->query("SELECT * FROM students WHERE avg_score > 60");

// Print the results of the query
foreach ($students as $student) {
    echo "Name: " . $student['name'] . ", Average Score: " . $student['avg_score'] . "\n";
}

// Close the database connection
$pdo->disconnect();
?>
