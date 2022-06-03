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

$query = "SELECT DATE(timestamp),count(distinct ipAddress) FROM hit group by DATE(timestamp), ipAddress, description order by DATE(timestamp) desc";

$stmt = $conn->prepare($query);
if ($stmt === FALSE) {
    die ("Error: " . $conn->error);
}
$stmt->execute();
// Prozedural
$result = $stmt->get_result();

header("Content-Type: text/plain");
while ($row = $result->fetch_row()) {
    echo $row[0] . ' - ' . $row[1] . "\n";
}