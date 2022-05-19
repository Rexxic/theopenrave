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

$query = 'SELECT distinct ipAddress,description,count(*) FROM hit group by ipAddress, description order by count(*) desc';

$stmt = $conn->prepare($query);
if ($stmt === FALSE) {
    die ("Error: " . $conn->error);
}
$stmt->execute();
// Prozedural
$result = $stmt->get_result();

header("Content-Type: text/plain");
while ($row = $result->fetch_assoc()) {
    echo str_replace(["\n", "Array(    "], "", print_r($row, true)) . "\n";
}