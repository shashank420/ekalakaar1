<?php
require "config.php";
session_start();
$accesstoken = $_SESSION['access_token'];
$client->revokeToken($accesstoken);
unset($_SESSION['access_token']);
session_destroy();
header('Location: ../sign-up.php');
exit();
?>