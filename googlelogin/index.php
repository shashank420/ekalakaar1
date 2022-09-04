<?php
session_start();
if (!isset($_SESSION['access_token'])) {
    header('Location: login.php');
    exit();
}

echo $_SESSION['email'];
echo $_SESSION['id'];
$picture =  $_SESSION['picture'];
echo '<img src = '. $picture .'>';
echo "<br><a href='logout.php'>Logout</a>";

// require "config.php";
// $loginURL = $client->createAuthUrl();
// echo "<a href='". $loginURL ."'>Google Login</a>";


?>