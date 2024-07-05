<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "carrental";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
} else {
    echo 'Its working';
}