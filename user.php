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
          <form action="" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" name="firstname" id="form-control" value="first_name" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" name="lastname" value="last_name" disabled>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Phone number</label>
              <input type="number" class="form-control" name="phone" value=9787894787 disabled>
            </div>
            <div class="col-md-6">
              <label for="validationCustomUsername" class="form-label">Email</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" name="email" aria-describedby="inputGroupPrepend" value="xyz1245@gmail.com" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Age</label>
              <input type="number" class="form-control" name="age" value=24 disabled>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Gender</label>
              <input type="text" class="form-control" name="gender" value="Male" disabled>
              <div class="invalid-feedback">
                Please select a Gender.
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Caste</label>
              <input type="text" class="form-control" name="Caste" value="Obc">
            </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">Religion</label>
              <input type="text" class="form-control" name="Religion" value="Hindu" disabled>
            </div>

            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Height</label>
              <input type="number" class="form-control" name="Height" value="4.5" disabled>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Weight</label>
              <input type="number" class="form-control" name="weight" value="45" disabled>
            </div>


            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Language</label>
              <input type="text" class="form-control" name="language" value="hindi" disabled>
            </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">Education</label>
              <input type="text" class="form-control" name="education" value="BA Art" disabled>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Skills</label>
              <input type="text" class="form-control" name="skils" value="Dance" disabled>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Experience</label>
              <input type="number" class="form-control" name="experience" value="3" disabled>
            </div>

            <div class="row mt-4">
              <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Url for any video link (Social Media link such as
                  YouTube/ Insta/ Facebook
                  etc.) </label>
                <input type="text" class="form-control" name="url" id="validationCustom05" value="http://hkjhk.com" disabled>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Upload your resume </label>
                <input class="form-control" type="file" name="resume" value="img/r2.jpg" id="formFile" disabled>
              </div>
            </div>
          </form>
          <a href="#" class="btn btn-danger" id="submit">Edit your profile</a>
        </div>
        <div class="card-footer text-muted">
          last changes 2 days ago
        </div>
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
  <script>
    $(document).ready(function() {
      $('#submit').click(function() {
        var disabled = $("#form-control").attr('disabled');
        if (disabled === undefined) {
          $("#form-control").attr('disabled', 'disabled');
        } else {
          $("#form-control").removeAttr('disabled');
        }
      })
    });
  </script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>