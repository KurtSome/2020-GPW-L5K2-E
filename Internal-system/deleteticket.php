<?php

error_reporting(0);
require_once('db.php');

$id = $_GET['id'];

// 2. Do a query (Select all students)
$query  = "DELETE FROM ticket ";
$query .= "WHERE ticket_id = $id";

echo $query;

$result = mysqli_query($connection, $query);


if (!$result) {
    die("query is wrong");
}
header('location: ticket.php');

mysqli_close($connection);

?>