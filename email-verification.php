<?php
session_start();
if (!isset($_SESSION['emailverify'])) {
    $_SESSION['emailverify'] = false;
}
else if ($_SESSION['emailverify'] == true) {
    echo "Success! Your account has been verified. <a href='login.php'>Click here to login.</a>";
    $_SESSION['showAlert'] = false;
    $_SESSION['showError'] = false;
    require "partials/_dbconnect.php";
        if (isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && isset($_SESSION['email'])  && isset($_SESSION['jobtitle']) && isset($_SESSION['password']) && isset($_SESSION['passwordConfirmation'])) {
            $firstname = $_SESSION['firstname'];      
            $lastname = $_SESSION['lastname'];      
            $email = $_SESSION['email'];
            $jobtitle = $_SESSION['jobtitle'];
            $password  = $_SESSION['password'];
            $passwordConfirmation = $_SESSION['passwordConfirmation'];
            if ($password == $passwordConfirmation) {
                // $sql = "SELECT email FROM `googlesignup` WHERE email ='$email'";
                // $result = mysqli_query($conn, $sql);
                // $rows = mysqli_num_rows($result);
                // if ($rows > 0) {
                //     $_SESSION['email'] = true;
                //     header("Location: login.php");
                //     exit();
                // }
                // else{
                $sql = "SELECT emailId FROM `signup` WHERE emailId = '$email'";
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_num_rows($result);
                    if ($rows > 0) {
                            $_SESSION['showEmailError'] = true;
                    }
                    else{
                        $sql1 = "INSERT INTO `signup` (`firstName`, `lastName`, `emailId`, `jobName`, `userPassword`) VALUES ('$firstname', '$lastname', '$email', '$jobtitle', '$password');";
                        $result1 = mysqli_query($conn, $sql1);
                        $_SESSION['showAlert'] = true;
                    }
                // }
            }
            else {
                $_SESSION['showError'] = true;
            }
        }
        unset($_SESSION['emailverify']);
}
else if ($_SESSION['emailverify'] == false) {
    echo "Error. Wrong OTP entered, please try again.";
    unset($_SESSION['emailverify']);
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