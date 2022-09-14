<?php

// $server = "localhost:3306";
// $username = "ekalakaa_WPVB1";
// $password = "HSw+no&nXoil";
// $database = "ekalakaa_WPVB1";
$server = "localhost";
$username = "root";
$password = "";
$database = "ekalakaar";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Error, Connection Failed!".mysqli_connect_error());
}


?>