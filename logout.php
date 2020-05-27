<?php

session_start();

if (session_destroy()) {
    header('location: un-customer-system.php');
}

?>