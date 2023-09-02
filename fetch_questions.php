<?php
// Establish database connection (modify according to your setup)
// Establish database connection (modify according to your setup)
include('config.php');

error_reporting(E_ALL);  // Enable error reporting
ini_set('display_errors', 1);  // Display errors on screen

// Modify the SQL query to include OptionID and match your actual table and attribute names
$sql = "SELECT q.QuestionID, q.SectionID, q.QuestionText, q.IsMultipleChoice, o.OptionID, o.OptionText
        FROM Question q
        LEFT JOIN Option o ON q.QuestionID = o.QuestionID";

$result = $db->query($sql);

$questions = [];
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $questionId = $row['QuestionID'];
    if (!isset($questions[$questionId])) {
      $questions[$questionId] = [
        'QuestionID' => $row['QuestionID'],
        'SectionID' => $row['SectionID'],
        'QuestionText' => $row['QuestionText'],
        'IsMultipleChoice' => $row['IsMultipleChoice'],
        'options' => []
      ];
    }
    if (!empty($row['OptionText'])) {
      // Include OptionID in the options array
      $questions[$questionId]['options'][] = [
        'OptionID' => $row['OptionID'],
        'OptionText' => $row['OptionText']
      ];
    }
  }
}

$db->close();

// Debug: Print the content of the questions array
// var_dump($questions);

// Convert associative array to indexed array for JSON response
$questions = array_values($questions);

header('Content-Type: application/json');
echo json_encode($questions);
