<?php
session_start();
require "config.php";
if (isset($_SESSION['access_token'])) {
    $client -> setAccessToken($_SESSION['access_token']);
}
else if (isset($_GET['code'])){
        $token = $client -> fetchAccessTokenWithAuthCode($_GET['code']); 
        $_SESSION['access_token'] = $token;
        $client->setAccessToken($token['access_token']);    
        $gauth = new Google_Service_Oauth2($client);
        $userData = $gauth->userinfo->get();
        $_SESSION['id'] = $userData['id'];
        $_SESSION['email'] = $userData['email'];
        $_SESSION['gender'] = $userData['gender'];
        $_SESSION['picture'] = $userData['picture'];
        $_SESSION['familyName'] = $userData['familyName'];
        $_SESSION['givenName'] = $userData['givenName'];
        header('Location: index.php');
        exit();
}
else{
    header('Location: login.php');
    exit();
}


?>