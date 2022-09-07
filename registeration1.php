<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link rel="stylesheet" href="animation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&family=Irish+Grover&family=Lobster&family=Yesteryear&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



</head>

<body>

    <div class="" style="background-color: black;">
        <nav class="navbar bg-light fixed-top" style="background-color: white;">
            <div class="container-fluid">
                <a class="navbar-brand " style="margin-left: 70px;" href="index.php">
                    <Span class="text-danger text"> <strong>ekala</strong></Span>kaar
                </a>


            </div>
            
        </nav>

        <!-- homo -->
        <section class="section-padding mt-4">



            <div class="container">
                <div class="col-md-12 ">
                    <div class="section-header mt-4 text-center text-white pb-5">
                        <h2 class=""><span class="text-danger">Register</span> Your self
                        </h2>

                    </div>
                </div>
            </div>

            <div class="row  section-padding" style="background-color: black;">
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text text-start text-white " style="margin-left: 100px; margin-top: 50px; margin-bottom: 180px;">
                        <h2>
                            <span class="text-danger">By Registring your self </span><br>
                            You will be able to get all opportunities which you deserve
                        </h2>
                        <p style="
                              margin-top: 60px;
                              margin-bottom: 1rem;
                          "> Ekalakaar.com has being trying to engage with Film makers, Corporates and individual
                            customers and bringing various opportunities for artist. Artists and Technicians shall
                            register for existing following opportunities or for future opportunities </p>
                        <a href="https://forms.gle/HZPW6xmejd4VQ43k7" class="btn btn-danger mt-4">Register Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mt-4">
                    <img src="img/transeparendt/rg1.png" style="margin-left:100px ;" class="img-fluid  rounded-circle" alt="...">



                </div>

            </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="section-header text-center pb-5">
                <h2 class="shadow p-3 mb-2 bg-body rounded"><span class="text-danger">Registration </span>Form</h2>

            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <form action="partials/_handleRegisteration.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Application for</label>
                    <select class="form-select" name="curr_position" id="validationCustom04" required>
                        <option selected disabled>Choose...</option>
                        <option value="Current Opportunies">Current Opportunies</option>
                        <option value="Future Opportunies">Future Opportunies</option>

                    </select>
                    <div class="invalid-feedback">
                        Please select your Current position
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Role of application</label>
                    <select class="form-select" name="Role_of_application" id="validationCustom04" required>
                        <option selected disabled>Choose...</option>
                        <option value="Actor">Actor</option>
                        <option value="Director">Director</option>
                        <option value="Animatior">Animatior</option>
                        <option value="">Classical dancer</option>
                        <option value="Classical dancer">Dancer</option>
                        <option value="Designer">Designer</option>
                        <option value="Drawing">Drawing</option>
                        <option value="Ghumra Dance">Ghumra Dance</option>
                        <option value="Graphic Art">Graphic Art</option>
                        <option value="Graphic Designer">Graphic Designer</option>
                        <option value="Junior artist">Junior artist</option>
                        <option value="Modelling">Modelling</option>
                        <option value="Music">Music</option>
                        <option value="Music in santali traditional">Music in santali traditional</option>
                        <option value="Odissi Dance">Odissi Dance</option>
                        <option value="Painter">Painter</option>
                        <option value="Painting">Painting</option>
                        <option value="Photograph">Photograph</option>
                        <option value="Poet">Poet</option>
                        <option value="Poetry reciting">Poetry reciting</option>
                        <option value="Producer, EP">Producer, EP</option>
                        <option value="Sambalpuri dance">Sambalpuri dance</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select application role
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" name="firstname" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="validationCustom02" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Phone number</label>
                    <input type="number" class="form-control" name="phone" id="validationCustom02" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please enter your valid email id
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" id="validationCustom02" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Gender</label>
                    <select class="form-select" id="validationCustom04" name="gender" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a Gender.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Caste</label>
                    <select class="form-select" id="validationCustom04" name="caste" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="OBC">OBC</option>
                        <option value="General">General</option>
                        <option value="ST/SC">ST/SC</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select your Caste
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Religion</label>
                    <select class="form-select" name="religion" id="validationCustom04" required>
                        <option selected disabled>Choose...</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Muslims">Muslims</option>
                        <option value="Sikhs">Sikhs</option>
                        <option value="Christians">Christians</option>
                        <option value="Buddhists">Buddhists</option>
                        <option value="Jain">Jain</option>
                        <option value="Parsis">Parsis</option>
                        <option value="Any other">Any other</option>

                    </select>
                    <div class="invalid-feedback">
                        Please select application role
                    </div>

                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Height</label>
                    <input type="text" class="form-control" name="height" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide Your height
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Weight</label>
                    <input type="number" class="form-control" name="weight" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide your Weight.
                    </div>
                </div>


                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Language</label>
                    <input type="text" class="form-control" name="language" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide your Education
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Education</label>
                    <input type="text" class="form-control" name="education" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide your Education
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Skills</label>
                    <input type="text" class="form-control" name="skills" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide your Skills
                    </div>
                </div>




                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Experience</label>
                    <input type="number" class="form-control" name="experience" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide your Experience.
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Any Awards/
                            Recognition</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="award" rows="3"></textarea>

                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Url for any video link (Social Media link such as YouTube/ Insta/ Facebook
                            etc.) </label>
                        <input type="text" class="form-control" name="url" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide valid
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Refrence/ Recommendation</label>
                        <input type="text" class="form-control" name="reference" id="validationCustom05">
                        <div class="invalid-feedback">
                            Please provide valid
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload your resume </label>
                        <input class="form-control" id="pdf" type="file" name="pdf" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">What kind of Support you need</label>
                        <select class="form-select" name="support" id="validationCustom04" required>
                            <option selected disabled>Choose...</option>
                            <option value="Work (full time/ assignment)">Work (full time/ assignment)
                            </option>
                            <option value="Creating attractive profile">Creating attractive profile
                            </option>
                            <option value="Marketing and promotion"> Marketing and promotion
                            </option>


                            <option>Any other</option>

                        </select>
                        <div class="invalid-feedback">
                            Please select application role
                        </div>

                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Share your suggestions or comments</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="suggestions" rows="3"></textarea>

                    </div>




                </div>






                <div class="col-12 mt-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">

                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4" style="margin-bottom: 40px;">
                    <button class="btn btn-danger" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>

    </div>

    </section>


    <footer id="Contact" class="bg-dark" style="padding-bottom:50px;">
        <div class="container">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 mt-4">
                        <div class="about-img text-white">

                            <li class="bi mt-4 bi-envelope mx-1"> kutumbharat@gmail.com </li>
                            <li class="bi mt-4 bi-globe  mx-1"> EKalakaar.com Team </li>
                            <li class="bi mt-4 bi-telephone-fill  mx-1"> 07701872112 </li>
                            <li class="bi mt-4 bi-geo-alt-fill  mx-1"> New Delhi I Mumbai I Bhubaneswar (Odisha) </li>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5 text-center">
                        <div class="about-text">
                            <h2 class="text-white"><span class="text-danger">ekala</span>kar</h2>
                            <p class="soicals mt-4" style="letter-spacing: 15px;">
                                <i class="bi bi-whatsapp text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                                <i class="bi bi-twitter text-danger mx-1"></i>
                                <i class="bi bi-facebook text-danger mx-1"></i>

                            </p>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </footer>
    </div>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })();
    </script>
    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?56377';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#4dc247",
                "ctaText": "",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginBottom": "50",
                "marginRight": "50",
                "position": "right"
            },
            "brandSetting": {
                "brandName": "Ekalakaar",
                "brandSubTitle": "Typically replies within a day",
                "brandImg": "https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
                "welcomeText": "Hi there!\nHow can I help you?",
                "messageText": "Hello, I have a question about http://www.ekalakaar.com/",
                "backgroundColor": "#0a5f54",
                "ctaText": "Start Chat",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "917701872112"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>