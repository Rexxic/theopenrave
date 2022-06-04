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

$query = "SELECT distinct date_format(timestamp, '%M %d %Y : %H'),count(distinct ipAddress, description) FROM hit group by date_format(timestamp, '%m-%d-%Y:%H') order by date_format(timestamp, '%M %d %Y : %H') desc";

$stmt = $conn->prepare($query);
if ($stmt === FALSE) {
    die ("Error: " . $conn->error);
}
$stmt->execute();
// Prozedural
$result = $stmt->get_result();

header("Content-Type: text/plain");
while ($row = $result->fetch_row()) {
    echo $row[0] . ' - ' . str_repeat('|', $row[1]) . "\n";
}