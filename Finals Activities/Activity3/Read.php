<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

?>