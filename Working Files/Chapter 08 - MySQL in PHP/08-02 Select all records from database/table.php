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


if ($db->connect_errno>0) {
    echo "Database connection error" . $db->connect_error;
    exit;
}

$sql = "SELECT * FROM `test_db` ORDER BY `name`";

$result = $db->query($sql);


?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Password</th>
        <th>Secrets</th>
    </tr>

    <?php
    
    while ($row = $result->fetch_object()) {
        $id = $row->id;
        $name = htmlentities($row->name, ENT_QUOTES, "UTF-8");
        $password = htmlentities($row->password, ENT_QUOTES, "UTF-8");
        $secrets = htmlentities($row->secrets, ENT_QUOTES, "UTF-8");
    ?>

    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $password; ?></td>
        <td><?php echo $secrets; ?></td>
    </tr>
    
    <?php
    
    }

    ?>

</table>