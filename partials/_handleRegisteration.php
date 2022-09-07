<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // if (isset($_POST['curr_position'])) {
        require "_dbconnect.php";
        require "_bootstrap.php";
        $curr_position = $_POST['curr_position'];
        $Role_of_application = $_POST['Role_of_application'];
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $caste = $_POST['caste'];
        $religion = $_POST['religion'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $language = $_POST['language'];
        $education = $_POST['education'];
        $skills = $_POST['skills'];
        $award = $_POST['award'];
        $experience = $_POST['experience'];
        $url = $_POST['url'];
        $reference = $_POST['reference'];
        $support = $_POST['support'];
        $suggestions = $_POST['suggestions'];
        $pdf = $_FILES['pdf']['name'];
        $pdf_type = $_FILES['pdf']['type'];
        $pdf_size = $_FILES['pdf']['size'];
        $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
        $pdf_store = "../pdf/" . $pdf;
        move_uploaded_file($pdf_tem_loc, $pdf_store);
        $sql = "INSERT INTO `registration`(`ApplicationFor`, `Role_of_Application`, `FirstName`, `LastName`, `PhoneNumber`,`Email`,`Age`,
        `Gender`,`Caste`,`Religion`,`Height`,`Weight1`,`Lang`,`Education`,`Skills`,`Experience`,`Awards`,`pdf`,`reference`,`suggestions`,`support`,`weblinks`
       ) VALUES
         ('$curr_position', '$Role_of_application','$firstName', 
         '$lastName', '$phone', '$email','$age',
         '$gender','$caste','$religion','$height','$weight','$language',
         '$education','$skills','$experience','$award','$pdf','$reference','$suggestions','$support','$url'
         )";
        $result = mysqli_query($conn, $sql);
        header("Location:../user.php");
        exit();
            




        // echo $contact;
        // 
        // echo '<h1>Thank You for contacting us. Our team will get in touch with you soon!<a href="../index.php">Click here for the homepage</a></h1>';

    }
// }
?>