<?php

$dbConnect = array(
    'server' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'test_db'
);

$db = new mysqli(
    $dbConnect['server'],
    $dbConnect['user'],
    $dbConnect['pass'],
    $dbConnect['name']
);

echo $db -> host_info;
echo "<br>";
echo $db -> connect_errno;
echo "<br>";

if ($db->connect_errno>0) {
    echo "Database connection error" . $db->connect_error;
    exit;
}


?>