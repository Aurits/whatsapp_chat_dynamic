<?php

// Get JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

include('config.php');
error_reporting(E_ALL);  // Enable error reporting
ini_set('display_errors', 1);  // Display errors on screen

foreach ($data as $sectionId => $responses) {
  foreach ($responses as $response) {
    // Escape and sanitize user input before inserting into the database
    $sectionId = $db->real_escape_string($sectionId);
    $response = $db->real_escape_string($response);

    // Insert response into the database
    $sql = "INSERT INTO UserResponse (UserID, QuestionID, OptionID, ResponseText, ResponseDate)
            VALUES (1, $sectionId, NULL, '$response', NOW())";

    if (!$db->query($sql)) {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
  }
}

$db->close();

// Send a response back to the client
$response = ['message' => 'Responses saved successfully'];
header('Content-Type: application/json');
echo json_encode($response);
