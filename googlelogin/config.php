<?php
require "vendor/autoload.php";

$clientID = "863689907736-3dd6sh3l8cdp829p3hh5dimuu7m7fenp.apps.googleusercontent.com";
$clientSecret = "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";
$redirectURL = "http://localhost/ekalakaar/googlelogin/callback.php";

// Creating a client request to google
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectURL);
$client->addScope("email");
$client->addScope("profile");

?>