<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE contact_details (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
number int(10) NOT NULL,
comment varchar(100) 
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Registration created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>