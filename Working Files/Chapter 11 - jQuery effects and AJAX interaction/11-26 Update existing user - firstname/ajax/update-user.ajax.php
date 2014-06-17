<?php

require_once '../php-includes/connect.inc.php';

$id = $_POST['id'];
$newName = $_POST['new_name'];

$stmt = $db->prepare("UPDATE movie_goers SET firstname = ? WHERE user_id = ?");
$stmt->bind_param('si', $newName, $id);
$stmt->execute();
$stmt->close();

?>