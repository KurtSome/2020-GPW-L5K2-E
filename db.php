<?php
// 1. Open database connection
$dbhost = "localhost";
$dbuser = "he-sunzhengshu";
$dbpass = "pp3qt700";
$dbname = "2201713130116";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}
?>