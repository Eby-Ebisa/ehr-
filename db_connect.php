<?php
// Configuration for MySQL connection
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password (often blank)
$dbname = "nechisar_ehr"; // MUST match the database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// If the connection is successful, no output is produced here.
?>