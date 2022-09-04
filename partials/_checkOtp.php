<?php
session_start();
$_SESSION['emailverify'] = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['otp'])) {
        if (isset($_SESSION['OTP'])) {
             $otp_sent = $_SESSION['OTP']; 
             $otp_entered = $_POST['otp'];
             if ($otp_sent == $otp_entered) {
                $_SESSION['emailverify'] = true;
             }
             else {
                $_SESSION['emailverify'] = false;
             }
             header('Location: ../email-verification.php');
        }
        else{
            $_SESSION['OTP'] = false;
        }
    }
}


?>