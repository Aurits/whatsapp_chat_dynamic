<?php
// Database configuration
$host = "localhost";        // Database host
$username = "root";    // Database username
$password = "";    // Database password
$database = "survey_yoo";    // Database name

// Establish database connection
$db = new mysqli($host, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
