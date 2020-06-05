<?php

// make db conection
require("logincheck.php");
require('db.php');
   
$deleteid = $_GET['order_id'];

// 2. Do a query
$query  = "DELETE FROM `order` "; 
$query .= "WHERE order_id = $deleteid ";

echo $query;

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}
header('location: customers.php');

mysqli_close($connection);

?>
