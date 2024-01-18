<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn = new mysqli($servername, $username, $password,$dbname);

$sql1 = "CREATE TABLE Users(
    id INT(10) PRIMARY KEY,
    username CHAR(255),
    email CHAR(255),
    Role CHAR(10)
    )";

        if ($conn->query($sql1) === TRUE) {
            echo "Users table created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }    

?>