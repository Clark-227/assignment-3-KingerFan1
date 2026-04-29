<?php
// logout.php

// Start session
session_start();

// Destroy Session
session_destroy();

// Redirect to home page
header("Location: home.php");
