<?php
require "partials/_bootstrap.php";
require "partials/_dbconnect.php";

session_start();

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['curr_position'])) {
  $curr_position = $_POST['curr_position'];
  $Role_of_application = $_POST['Role_of_application'];
  $firstName = $_POST['firstname'];
  $_SESSION['firstname'] = $firstName;
  $lastName = $_POST['lastname1'];
  $_SESSION['lastname'] = $lastName;
  $email = $_SESSION['email'];
  $phone = $_POST['phone'];
  $_SESSION['phone'] = $phone;
<<<<<<< HEAD
  $email = $_SESSION['email'];
  $_SESSION['email'] = $email;
=======
>>>>>>> 5c22968b09474f3b2004de21d71df1a9a34986e0
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
<<<<<<< HEAD
  $sql = "UPDATE `registration` SET `Age` = '$age', 'FirstName'='$firstName','LastName'='$lastName','PhoneNumber'='$phone','Email'='$email','Gender'='$gender','Caste'='$caste','Religion'='$religion','Height'='$height','Weight1'='$weight','Lang'='$language','Skills'='$skills','Experience'='$experience','Awards'='$award','weblinks'='$url,'Reference'='$reference','pdf'='$pdf','Support'='$support','Suggestions'='$suggestions' WHERE `Email` = $email;";
=======
  $sql= "UPDATE `registration` SET `Age` = '$age', 'FirstName'='$firstName','LastName'='$lastName','PhoneNumber'='$phone', 'Gender'='$gender','Caste'='$caste','Religion'='$religion','Height'='$height','Weight1'='$weight','Lang'='$language','Skills'='$skills','Experience'='$experience','Awards'='$award','weblinks'='$url,'Reference'='$reference','pdf'='$pdf','Support'='$support','Suggestions'='$suggestions' WHERE `registration`.`Email` = '$email';";
>>>>>>> 5c22968b09474f3b2004de21d71df1a9a34986e0
  $result = mysqli_query($conn, $sql);
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eKalakaar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="animation.css">
  <link rel="stylesheet" href="new.css">


  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fruktur&family=Irish+Grover&family=Lobster&family=Yesteryear&family=Zen+Kurenaido&display=swap" rel="stylesheet">




  <!-- <link rel="stylesheet" href="css/style.css">  -->
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="">
  <nav class="navbar bg-light fixed-top" style="background-color: white;">
    <div class="container-fluid">
      <a class="navbar-brand " style="margin-left: 70px;" href="index.php">
        <Span class="text-danger text"> <strong>ekala</strong></Span>kaar
      </a>
      <a class="navbar-brand" href="partials/_logout.php">Logout</a>
    </div>
  </nav>


  <section class="section-padding  text-white">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="img/user-bg2.png" class="w-100" style="height:70vh;" alt="...">

        </div>


        <div class="carousel-caption mt-4 text-white">


          <div> <img src="img/abt1.jpg" style="width:40vh" alt="" class="img-fluid rounded-circle "></div>
          <h1>Hello!, User</h1>

          <div class="container">
            <p>Classical dancer</p>
          </div>
        </div>

      </div>


    </div>
    </div>
  </section>
  <section class="section-padding">
    <div class="container">

      <div class="card ">
        <div class="card-header text-center text-danger " style="font-weight:bold">
          YOUR INFORMATION
        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <form action="user.php" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
<<<<<<< HEAD
              <label for="validationCustom01" class="form-label">First name: <?php
                                                                              echo $_SESSION['firstname'];
                                                                              ?>" disabled></label>
              <input type="text" class="form-control" name="firstname" id="form-control" value="">

            </div>
            <div class=" col-md-4">
              <label for="validationCustom02" class="form-label">Last name:<?php
                                                                            echo $_SESSION['lastname'];
                                                                            ?></label>
              <input type="text" class="form-control" name="lastname" value="">
            </div>
            <div class=" col-md-6">
              <label for="validationCustom02" class="form-label">Phone number: <?php
                                                                                echo $_SESSION['phone'];
                                                                                ?></label>
              <input type="number" class="form-control" name="phone" value="">
=======
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" name="firstname" id="form-control" value="
              <?php
              echo $_SESSION['firstname'];
              ?>" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" name="lastname1" value="<?php
                                                                              echo $_SESSION['lastname'];
                                                                              ?>">
>>>>>>> 5c22968b09474f3b2004de21d71df1a9a34986e0
            </div>
            <div class="col-md-6">
              <label for="validationCustomUsername" class="form-label">Email:<?php echo $_SESSION['email']; ?></label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
<<<<<<< HEAD
                <input type="text" class="form-control" name="email" aria-describedby="inputGroupPrepend" value="" disabled>
=======
                <input type="text" class="form-control" name="email" aria-describedby="inputGroupPrepend" value="<?php echo $_SESSION['email']; ?>" readonly>
>>>>>>> 5c22968b09474f3b2004de21d71df1a9a34986e0
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Age:<?php
                                                                      echo $_SESSION['age'];
                                                                      ?></label>
              <input type="number" class="form-control" name="age" value="">
            </div>
            <div class=" col-md-3">
              <label for="validationCustom04" class="form-label">Gender:<?php
                                                                        echo $_SESSION['gender'];
                                                                        ?></label>
              <input type="text" class="form-control" name="gender" value="">
              <div class="invalid-feedback">
                Please select a Gender.
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Caste:<?php
                                                                        echo $_SESSION['caste'];
                                                                        ?></label>
              <input type="text" class="form-control" name="caste" value="">
            </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">Religion:<?php
                                                                          echo $_SESSION['religion'];
                                                                          ?></label>
              <input type="text" class="form-control" name="religion" value=" ">
            </div>

            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Height:<?php
                                                                        echo $_SESSION['height'];
                                                                        ?></label>
              <input type="number" class="form-control" name="height" value=" ">
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Weight:<?php
                                                                        echo $_SESSION['weight'];
                                                                        ?></label>
              <input type="number" class="form-control" name="weight" value="">
            </div>


            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Language:<?php
                                                                          echo $_SESSION['language'];
                                                                          ?></label>
              <input type="text" class="form-control" name="language" value="">
            </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">Education:<?php
                                                                            echo $_SESSION['education'];
                                                                            ?></label>
              <input type="text" class="form-control" name="education" value="">
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Skills:<?php
                                                                        echo $_SESSION['skills'];
                                                                        ?></label>
              <input type="text" class="form-control" name="skills" value="">
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Experience:<?php
                                                                            echo $_SESSION['experience'];
                                                                            ?></label>
              <input type="number" class="form-control" name="experience" value="">
            </div>

            <div class="row mt-4">
              <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Url for any video link (Social Media link such as
                  YouTube/ Insta/ Facebook
                  etc.): <?php
                          echo $_SESSION['url'];
                          ?> </label>
                <input type="text" class="form-control" name="url" id="validationCustom05" value="">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Upload your resume: <?php
                                                                            echo $_SESSION['pdf["name"]'];
                                                                            ?> </label>
                <input class="form-control" type="file" name="pdf" value="" id="formFile">
              </div>
            </div>
            <button type="submit" class="btn btn-danger">Save Changes</button>
          </div>
          <div class="card-footer text-muted">
            Last changes 2 days ago
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer id="Contact" class="bg-dark" style="padding-bottom:50px;">
    <div class="container">

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12 mt-4">
            <div class="text-white">

              <li class="bi mt-4 bi-envelope mx-1"> contact@eKalakaar.com </li>
              <li class="bi mt-4 bi-globe  mx-1"> eKalakaar.com Team </li>
              <li class="bi mt-4 bi-telephone-fill  mx-1"> 07701872112 </li>
              <li class="bi mt-4 bi-geo-alt-fill  mx-1"> New Delhi I Mumbai I Bhubaneswar (Odisha) </li>

            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5 text-center">
            <div class="about-text">
              <h2 class="text-white"><span class="text-danger">ekala</span>kar</h2>
              <p class="soicals mt-4" style="letter-spacing: 15px;">
                <a href="https://www.linkedin.com/company/ekalakaaropportunies"> <i class="bi bi-linkedin text-white mx-1"></i></a>
                <a href="https://www.instagram.com/ekalakaar/"><i class="bi bi-instagram text-white mx-1"></i></a>


                <a href="https://www.facebook.com/profile.php?id=100084854050118"><i class="bi bi-facebook text-danger mx-1"></i></a>
                <i class="bi bi-whatsapp text-white mx-1"></i>


              </p>
            </div>
          </div>
        </div>
      </div>





    </div>
  </footer>

  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>