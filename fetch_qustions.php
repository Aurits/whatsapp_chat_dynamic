<?php
// Establish database connection (modify according to your setup)
include('config.php');

$sql = "SELECT q.id, q.section_id, q.question, o.option_text FROM questions q LEFT JOIN options o ON q.id = o.question_id";
$result = $db->query($sql);

$questions = [];
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $questionId = $row['id'];
    if (!isset($questions[$questionId])) {
      $questions[$questionId] = [
        'id' => $row['id'],
        'section_id' => $row['section_id'],
        'question' => $row['question'],
        'options' => []
      ];
    }
    if (!empty($row['option_text'])) {
      $questions[$questionId]['options'][] = $row['option_text'];
    }
  }
}

$db->close();

// Convert associative array to indexed array for JSON response
$questions = array_values($questions);

header('Content-Type: application/json');
echo json_encode($questions);
?>
