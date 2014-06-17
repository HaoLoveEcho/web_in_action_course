<?php

error_reporting(0); // Disable error reporting for production version
                    // Remove this line for development 

$dbConnect = array(
    'server' => 'localhost', 
    'user' => 'root',   // Change to your username
    'pass' => '',       // Change to your password
    'name' => 'movies'  // Change to your database name
);

$db = new mysqli(
    $dbConnect['server'],
    $dbConnect['user'],
    $dbConnect['pass'],
    $dbConnect['name']
);

if ($db->connect_errno>0) {
    // echo "Database connection error" . $db->connect_error;  // Leave this line in for development version
    echo "<h1>Something went wrong!</h1>"; // Put in general message for production version
    exit;
}

?>