<?php
// Assuming you have some initial setup or configuration data here...
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Example query for data retrieval
$sql = "SELECT * FROM student_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - name: " . $row["name"]. " - age: " . $row["age"] . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
