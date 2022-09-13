<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // if (isset($_POST['curr_position'])) {
    require "_dbconnect.php";
    require "_bootstrap.php";
    $curr_position = $_POST['curr_position'];
    $Role_of_application = $_POST['Role_of_application'];
    $firstName = $_POST['firstname'];
    $_SESSION['firstname'] = $firstName;
    $lastName = $_POST['lastname'];
    $_SESSION['lastname'] = $lastName;
    $phone = $_POST['phone'];
    $_SESSION['phone'] = $phone;
    // $email = $_POST['email'];
    // $_SESSION['email'] = $email;
    $age = $_POST['age'];
    $_SESSION['age'] = $age;
    $gender = $_POST['gender'];
    $_SESSION['gender'] = $gender;
    $caste = $_POST['caste'];
    $_SESSION['caste'] = $caste;
    $religion = $_POST['religion'];
    $_SESSION['religion'] = $religion;
    $height = $_POST['height'];
    $_SESSION['height'] = $height;
    $weight = $_POST['weight'];
    $_SESSION['weight'] = $weight;
    $language = $_POST['language'];
    $_SESSION['language'] = $language;
    $education = $_POST['education'];
    $_SESSION['education'] = $education;
    $skills = $_POST['skills'];
    $_SESSION['skills'] = $skills;
    $award = $_POST['award'];
    $_SESSION['award'] = $award;
    $experience = $_POST['experience'];
    $_SESSION['experience'] = $experience;
    $url = $_POST['url'];
    $_SESSION['url'] = $url;
    $reference = $_POST['reference'];
    $_SESSION['reference'] = $reference;
    $support = $_POST['support'];
    $_SESSION['support'] = $support;
    $suggestions = $_POST['suggestions'];
    $_SESSION['suggestions'] = $suggestions;
    $pdf = $_FILES['pdf']['name'];
    
    
     $_SESSION['pdf["name"]'] = $pdf;
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