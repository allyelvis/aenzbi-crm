<?php
// database_connection.php
$servername = 'localhost'; // Replace with your DB server
$username = 'user'; // Replace with your DB username
$password = 'password1'; // Replace with your DB password
$dbname = 'aenzbicrm';    // Replace with your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
//echo 'Connected successfully'; // Uncomment for debugging

?>
