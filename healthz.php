<?php 

header('Content-Type: application/json');
http_response_code(200);
$response = "healthy";

echo json_encode($response);
?>