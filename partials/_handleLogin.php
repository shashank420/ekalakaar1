<?php
session_start();
$_SESSION['showNoAccount'] = false;
require "_dbconnect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {      
        $_SESSION['email'] = $_POST['email'];
        $email = $_POST['email'];
        $password  = $_POST['password'];
        $sql = "SELECT * FROM `signup` WHERE emailId = '$email' AND userPassword = '$password'";
        $result = mysqli_query($conn, $sql);
        $numberofrows = mysqli_num_rows($result);
        // $_SESSION['showAlert'] = true;
        if ($numberofrows == 1) {
            header('Location:../registeration1.php');
            // while ($rows = mysqli_fetch_assoc($result)) {
            //     echo 'Name: '.$rows['firstName'] .' '. $rows['lastName'].'<br>';
            //     echo 'Phone Number: '.$rows['countryCode'].' '. $rows['phoneNo'].'<br>';
            //     echo 'Job Role: '.$rows['jobName'].'<br>';
            //     echo 'Email ID: '.$rows['emailId'];
            // }
        }
        else{
            $_SESSION['showNoAccount'] = true;
            header('Location: ../login.php');
        }
    }
    // header("Location: ../afterlogin.php");
}
?>