<?php

$dbConnect = array(
    'server' => 'localhost',
    'user' => 'root',
    'pass' => '123',
    'name' => 'test_db'
);

$db = new mysqli(
    $dbConnect['server'],
    $dbConnect['user'],
    $dbConnect['pass'],
    $dbConnect['name']
);

$sql = "SELECT * FROM `test_db` ORDER BY `name`";

$result = $db->query($sql);

echo $db -> host_info;
echo "<br>";
echo $db -> connect_errno;
echo "<br>";

if ($db->connect_errno>0) {
    echo "Database connection error" . $db->connect_error;
    exit;
}


while ($row = $result->fetch_object()) {
    $id = $row->id;
    $name = htmlentities($row->name, ENT_QUOTES, "UTF-8");
    $password = htmlentities($row->password, ENT_QUOTES, "UTF-8");
    $secrets = htmlentities($row->secrets, ENT_QUOTES, "UTF-8");
    echo "$id $name $password $secrets<br>";
}
?>