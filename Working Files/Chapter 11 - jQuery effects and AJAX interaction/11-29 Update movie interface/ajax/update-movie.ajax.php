<?php

require_once '../php-includes/connect.inc.php';

$thisField = $_POST['this_field'];
$id = $_POST['id'];
$newName = $_POST['new_name'];

$stmt = $db->prepare("UPDATE movies SET $thisField = ? WHERE movie_id = ?");
$stmt->bind_param('si', $newName, $id);
$stmt->execute();
$stmt->close();

?>