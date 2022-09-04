<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['contactNumber']) && isset($_POST['email']) && isset($_POST['award']) && isset($_POST['location']) && isset($_POST['education'])) {
        require "_dbconnect.php";
        require "_bootstrap.php";
        $contact = $_POST['contactNumber'];
        $email = $_POST['email'];
        $proposal = $_POST['award'];
        $location = $_POST['location'];
        $education = $_POST['education'];
        // echo $contact;
        $sql = "INSERT INTO `handlecontact` (`ContactNumber`, `Email`, `Location`, `Education`, `Proposal`) VALUES 
        ('$contact', '$email', '$location', '$education', '$proposal')";
        $result = mysqli_query($conn, $sql);
        echo '<h1>Thank You for contacting us. Our team will get in touch with you soon!<a href="../index.php">Click here for the homepage</a></h1>';
    }
}


?>

