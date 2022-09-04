<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/vendor/autoload.php';
require "partials/_dbconnect.php";

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            $verify_email = $_POST['email'];
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            // $mail->SMTPDebug = 2;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'apikey';                     //SMTP username
            $mail->Password   = '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';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('coolsakshu30@gmail.com', 'Saksham Jain');
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
            $mail->Subject = 'Password reset';
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);

            $mail->send();
            // echo 'Message has been sent';
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    if (isset($_POST['otp'])) {
        if ($_SESSION['OTP'] == $_POST['otp']) {
            echo '<form method="post" action="">
            <input type="text" value="'. $_SESSION['email'] .'" disabled>
            <input type="password" maxlength="8" class="form-control" placeholder="Password" name="password" required>
            <input type="password" maxlength="8" class="form-control" placeholder="Confirm Password" name="confirmpassword" required>
            <button type="submit">Submit</button>
            </form>';
        }
    }
    else{
        echo '<form action="" method="post">
        <input type="text" value="'. $_SESSION['email'] .'" disabled>
        <input type="text" maxlength="6" pattern="\d*" class="form-control" placeholder="Enter OTP" name="otp" required>
        <button type="submit">Submit</button>
        </form>';
    }
}


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->