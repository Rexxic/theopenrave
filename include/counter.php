<?php
$servername = "127.0.0.1";
$username = "mysql";
$password = "";
$dbname = "hitlog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn->connect_error) {
    session_start();
    $sql = "INSERT INTO hit values('" . $_SERVER['REMOTE_ADDR'] . "','" . $_SERVER['HTTP_USER_AGENT'] . "', default)";

    if (!$conn->query($sql) === TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
