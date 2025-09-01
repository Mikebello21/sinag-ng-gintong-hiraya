<?php
$servername = "127.0.0.1";
$username = "root";
$password = ""; // Your MySQL password (if set)
$dbname = "business_admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>