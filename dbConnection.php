<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zyntax1";

try {
    $conn = new mysqli($hostname, $username, $password, $dbname);
    // Set the PDO error mode to exception
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>