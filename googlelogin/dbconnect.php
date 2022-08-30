<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "googletest";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Error, Connection Failed!".mysqli_connect_error());
}


?>