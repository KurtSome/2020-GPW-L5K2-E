<?php

// make db conection
require("includes/logincheck.php");
require('includes/db.php');
   
$deleteid = $_GET['cus_id'];

// 2. Do a query
$query  = "DELETE FROM customer "; 
$query .= "WHERE cus_id = $deleteid ";

echo $query;

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}
header('location: customers.php');

mysqli_close($connection);

?>
