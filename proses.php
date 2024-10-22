<?php
// proses.php

// Set the content type to JSON
header('Content-Type: application/json');

// Check if the POST request contains data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the FormData object
    $key = isset($_POST['key']) ? $_POST['key'] : '';

    // Simulate a response with the received data
    $response = [
        'status' => 'success',
        'message' => 'Data received successfully',
        'received_key' => $key,
    ];

    // Return the response as JSON
    echo json_encode($response);
} else {
    // If the request method is not POST, return an error message
    $response = [
        'status' => 'error',
        'message' => 'Invalid request method',
    ];

    // Return the error response as JSON
    echo json_encode($response);
}
?>
