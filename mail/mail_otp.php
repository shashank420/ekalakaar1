<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();

//Load Composer's autoloader
require 'vendor/autoload.php';
require "../partials/_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['countryCode']) && isset($_POST['phone']) && isset($_POST['jobtitle']) && isset($_POST['password']) && isset($_POST['passwordConfirmation'])) {
        $password = $_POST['password'];
        $passwordconfirm = $_POST['passwordConfirmation'];
        if (!isset($_SESSION['emailverify'])) {
            $_SESSION['emailverify'] = false;
        }
        else if ($password == $passwordconfirm) {
            // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                $_SESSION['passwordError'] = true;
                header("Location: ../sign-up.php");
                exit();
            }
        }
         
        // $_SESSION['email'] = $verify_email;
        // $_SESSION['firstname'] = $_POST['firstname'];
        // $_SESSION['lastname'] = $_POST['lastname']; 
        // $_SESSION['countryCode'] = $_POST['countryCode'];
        // $_SESSION['phone'] = $_POST['phone'];
        // $_SESSION['jobtitle'] = $_POST['jobtitle'];
        // $_SESSION['password'] = $_POST['password'];
        // $_SESSION['passwordConfirmation'] = $_POST['passwordConfirmation'];
    
        else if ($_SESSION['emailverify'] == true) {
            echo "Success! Your account has been verified. <a href='login.php'>Click here to login.</a>";
            $_SESSION['showAlert'] = false;
            $_SESSION['showError'] = false;
            require "partials/_dbconnect.php";
                    $firstname = $_POST['firstname'];      
                    $lastname = $_POST['lastname'];      
                    $email = $_POST['email'];      
                    $countryCode = $_POST['countryCode'];
                    $phone = $_POST['phone'];
                    $jobtitle = $_POST['jobtitle'];
                    $password  = $_POST['password'];
                    $passwordConfirmation = $_POST['passwordConfirmation'];
                    if ($password == $passwordConfirmation) {
                        $sql = "SELECT emailId FROM `signup` WHERE emailId = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $rows = mysqli_num_rows($result);
                            if ($rows > 0) {
                                    $_SESSION['showEmailError'] = true;
                            }
                            else{
                                $sql1 = "INSERT INTO `signup` (`firstName`, `lastName`, `emailId`, `countryCode`, `phoneNo`, `jobName`, `userPassword`) VALUES ('$firstname', '$lastname', '$email', '$countryCode', '$phone', '$jobtitle', '$password');";
                                $result1 = mysqli_query($conn, $sql1);
                                $_SESSION['showAlert'] = true;
                            }
                    }
                    else {
                        $_SESSION['showError'] = true;
                    }
                
                unset($_SESSION['emailverify']);

        }
        else if ($_SESSION['emailverify'] == false) {
            echo "Error. Wrong OTP entered, please try again.";
            unset($_SESSION['emailverify']);
        }

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->SMTPDebug = 2;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'apikey';                     //SMTP username
            $mail->Password   = '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';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('coolsakshu30@gmail.com', 'Saksham Jain');
            $verify_email = $_POST['email'];
            $mail->addAddress($verify_email);     //Add a recipient

            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            $otp = rand(100000,999999);
            $body = '<h1><u>Please enter the OTP to confirm your registration.</u></h1>
            <p>OTP - <b>'. $otp .'</b></p>';
            $_SESSION['OTP'] = $otp;

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'This is a test email';
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        // header('Location: ../email-verification.php');
        // exit();
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <form action="partials/_checkOtp.php" method="post">
    <input type="text" maxlength="6" pattern="\d*" class="form-control" placeholder="Enter OTP" name="otp" required>
    <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</body>

</html>