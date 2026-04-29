<?php
// logout_ajax.php
// This file is called by JavaScript (fetch API) to log the user out via AJAX.
// It returns a JSON response: {"status": "success"}

// Start session
session_start();

// Destroy session
session_destroy();

// Return response
echo json_encode(['status' => 'success']);
