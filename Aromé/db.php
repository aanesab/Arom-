<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "arome";


$con =  new mysqli($serverName, $userName, $password, $dbName);

if ($con->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connected sucessfully";
?>