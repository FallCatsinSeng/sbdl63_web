<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "db_sbdl63";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>