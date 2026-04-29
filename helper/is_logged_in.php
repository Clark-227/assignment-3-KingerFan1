<?php
// is_logged_in.php
// This file is called by JavaScript (fetch API) to check if a user is logged in.
// It returns a JSON response: {"status": "yes"} or {"status": "no"}

// Start the session
session_start();

// Check if session exists
if (isset($_SESSION['first_name'])) {
    echo json_encode(["status" => 'yes']);
} else {
    echo json_encode(["status" => 'no']);
}
