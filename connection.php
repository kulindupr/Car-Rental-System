<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "carrental";

$conn = new mysqli($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " .mysquli_error($conn));
}
?>