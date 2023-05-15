<?php
// Get the text and number input from the POST data
$text = $_POST['text'];
$number = intval($_POST['number']);

$array = array(
    'text' => $text,
    'number' => $number
);

// Return the array as a JSON response
header('Content-Type: application/json');
echo json_encode($array);


