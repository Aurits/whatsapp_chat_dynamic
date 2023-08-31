<?php
// Get JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

include('config.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define the UserID, QuestionID, and OptionID for the responses
$userId = 1;
$questionId = 1;
$optionId = 1;

foreach ($data as $response) {
  // Escape and sanitize user input before inserting into the database
  $escapedResponse = $db->real_escape_string($response);

  // Insert response into the database
  $sql = "INSERT INTO UserResponse (UserID, QuestionID, OptionID, ResponseText, ResponseDate)
          VALUES ($userId, $questionId, $optionId, '$escapedResponse', NOW())";

  if (!$db->query($sql)) {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
}

$db->close();

// Send a response back to the client
$response = ['message' => 'Responses saved successfully'];
header('Content-Type: application/json'); // Set the Content-Type header to JSON
echo json_encode($response); // Encode the response array as JSON and echo it
?>
