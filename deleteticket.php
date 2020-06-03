<?php

error_reporting(0);
require_once('db.php');

$id = $_GET[id];

// 2. Do a query (Select all students)
$query  = "DELETE FROM ticket ";
$query .= "WHERE id = $ticket_id";

echo $query;

mysqli_query($connection, $query);

mysqli_close($connection);

?>