<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Title: " . $row["title"]. "\n";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
