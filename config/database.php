<?php

define("DB_HOST", "localhost");
define("DB_USER", "LaXione");
define("DB_PASS", "1234567");
define("DB_NAME", "php_dev");

// Create Connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if connection was successful
if ($conn->connect_error) {
    die("<mark>Connection Failed:</mark> " . $conn->connect_error);
}

// Echo 'Connected!'; (Optional: for testing purposes)
?>
