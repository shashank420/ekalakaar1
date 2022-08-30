<?php
session_start();
$_SESSION['showAlert'] = false;
$_SESSION['showError'] = false;
require "_dbconnect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['countryCode']) && isset($_POST['phone']) && isset($_POST['jobtitle']) && isset($_POST['password']) && isset($_POST['passwordConfirmation'])) 
    {
        $firstname = $_POST['firstname'];      
        $lastname = $_POST['lastname'];      
        $email = $_POST['email'];      
        $countryCode = $_POST['countryCode'];
        $phone = $_POST['phone'];
        $jobtitle = $_POST['jobtitle'];
        $password  = $_POST['password'];
        $passwordConfirmation = $_POST['passwordConfirmation'];
        if ($password == $passwordConfirmation) {
           $sql = "SELECT emailId FROM`signup` WHERE emailId = '$email'";
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
    }
    header("Location: ../sign-up.php");
}
?>