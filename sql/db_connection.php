<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "owgs");
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}