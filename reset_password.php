<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/vendor/autoload.php';
require "partials/_bootstrap.php";
require "partials/_dbconnect.php";

session_start();



if (isset($_POST['forgotpasswdemail'])) {
    $_SESSION['forgotpasswdemail'] = $_POST['forgotpasswdemail'];
    $forgotpasswdemail = $_POST['forgotpasswdemail'];
    $sql="SELECT * FROM `signup` WHERE emailId = '$forgotpasswdemail'";
    $result= mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
        $_SESSION['emailNotExists'] = true;
        header("Location: forgot_password.php"); 
    }
    else{
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            $verify_email = $_POST['forgotpasswdemail'];
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
}
if (isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_SESSION['forgotpasswdemail']) ) {
    $email = $_SESSION['forgotpasswdemail'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($password == $confirmpassword) {
        // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $_SESSION['passwordError'] = true;
        }
        else{
            $sql = "UPDATE `signup` SET `userPassword` = '$confirmpassword' WHERE `signup`.`emailId` = '$email'";
            $result = mysqli_query($conn, $sql);
            $_SESSION['passwordChanged'] = true;
        }
    }
    header("Location: login.php");
}
if (isset($_POST['otp'])) {
    if ($_SESSION['OTP'] == $_POST['otp']) {
        echo '
        <div class="container my-5">
        <form action="" method="post">
        <input type="text" class="form-control" value="'. $_SESSION['forgotpasswdemail'] .'" disabled>
        <input type="password" class="form-control" class="form-control" placeholder="Password" name="password" required>
        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" required>
        <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        </div>';

    }
}
else{
    echo '
    <div class="container">
    <form action="" method="post">
    <input type="text" class="form-control" value="'. $_SESSION['forgotpasswdemail'] .'" disabled>
    <input type="text" class="form-control" maxlength="6" pattern="\d*" class="form-control" placeholder="Enter OTP" name="otp" required>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>';
}
?>
<title>Reset Password</title>