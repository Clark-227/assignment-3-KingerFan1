<?php
// db_connect.inc.php
// This file creates a PDO connection to the MySQL database.
// It is included by other PHP files using require_once.

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ctec';

// DSN - Data Source Name
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a pdo instance
$db = new PDO($dsn, $user, $password);

// set pdo default data type to be returned
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
