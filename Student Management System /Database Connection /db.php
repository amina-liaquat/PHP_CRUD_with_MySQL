<?php
// Database connection file
$host = "localhost";
$user = "root";   // default user in XAMPP/WAMP
$pass = "";       // keep empty for local server
$dbname = "student_db";

$conn = new mysqli($host, $user, $pass, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
