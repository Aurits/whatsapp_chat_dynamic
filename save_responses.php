<?php

include('config.php');


// Get JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Establish database connection (modify according to your setup)
$db = new mysqli('localhost', 'username', 'password', 'database_name');

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

foreach ($data as $sectionId => $response) {
  // Insert response into the database
  $sql = "INSERT INTO user_responses (section_id, response) VALUES ('$sectionId', '$response')";
  if (!$db->query($sql)) {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
}

$db->close();

// Send a response back to the client
$response = ['message' => 'Responses saved successfully'];
header('Content-Type: application/json');
echo json_encode($response);
?>
