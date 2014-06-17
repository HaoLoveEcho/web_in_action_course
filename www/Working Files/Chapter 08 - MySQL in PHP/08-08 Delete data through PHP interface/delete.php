<?php

include 'connect.php';

if (isset($_GET['id'])) {    // GET instead of POST for value in the URL
    $id = $_GET['id'];       // only id is needed - delete other variable assignments
}


$stmt = $db->prepare("DELETE FROM `test_db` WHERE `id` = ?");   // DELETE ... FROM ... WHERE
$stmt->bind_param('i', $id);    // 'i' for integer; only parameter is $id
$stmt->execute();               // as before
$stmt->close();                 // as before

header("Location: display-and-delete.php"); // change redirect

?>