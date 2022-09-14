<?php
session_start();
require "config.php";
require "../partials/_dbconnect.php";
if (isset($_GET['code'])){
        $token = $client -> fetchAccessTokenWithAuthCode($_GET['code']); 
        $_SESSION['access_token'] = $token;
        $client->setAccessToken($token['access_token']);    
        $gauth = new Google_Service_Oauth2($client);
        $userData = $gauth->userinfo->get();
        $_SESSION['id'] = $userData['id'];
        $_SESSION['email'] = $userData['email'];
        // $_SESSION['gender'] = $userData['gender'];
        $_SESSION['picture'] = $userData['picture'];
        $_SESSION['familyName'] = $userData['familyName'];
        $_SESSION['givenName'] = $userData['givenName'];
        
        $id = $userData['id'];
        $email = $userData['email'];
        $gender = $userData['gender'];
        $picture = $userData['picture'];
        $familyName = $userData['familyName'];
        $givenName = $userData['givenName'];

        $sql = "SELECT emailId FROM `signup` WHERE emailId = '$email'";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows > 0) {
            $_SESSION['emailexistsSignup'] = true;
            header("Location: ../login.php");
            exit();
        }
        $sql = "SELECT email FROM `googlesignup` WHERE email = '$email';";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows == 0) {
            $sql = "INSERT INTO `googlesignup` (`userId`, `givenName`, `familyName`,  `email`, `picture`) VALUES ('$id', '$givenName', '$familyName', '$email', '$picture');";
            $result = mysqli_query($conn, $sql);
        }
        header('Location: ../registeration1.php');
        exit();
}
else if (isset($_SESSION['access_token'])) {
    $client -> setAccessToken($_SESSION['access_token']);
    header('Location: ../registeration1.php');
     exit();
}
else{
    header('Location: login.php');
    exit();
}


?>