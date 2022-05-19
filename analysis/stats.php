<?php
$servername = "localhost";
$username = "mysql";
$password = "Rex3141592653";
$dbname = "hitlog";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
header("Content-Type: text/plain");

$query = 'SELECT distinct ipAddress,description,count(ipAddress) FROM hit';

$stmt = $conn->prepare($query);
$stmt->execute();
// Prozedural
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    print_r($row);
}