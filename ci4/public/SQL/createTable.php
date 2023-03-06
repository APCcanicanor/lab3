<?php
$servername = "192.168.150.213";
$username = "webprogss211";
$password = "fancyR!ce36";
$dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE canicanor_myguests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
email VARCHAR(50) NOT NULL,
website VARCHAR (255) NOT NULL,
comment VARCHAR (500) NOT NULL,
gender VARCHAR (25) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table canicanor_myguests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>