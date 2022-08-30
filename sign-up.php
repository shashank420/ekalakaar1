<?php
session_start();
require "googlelogin/config.php";
if (!isset($_SESSION['showAlert']) || !isset($_SESSION['showError'])) {
    $_SESSION['showAlert'] = false;
    $_SESSION['showError'] = false;
    $_SESSION['showEmailError'] = false;
}
else if ($_SESSION['showAlert'] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You have registered successfully. Please login to continue.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['showAlert']);
}
else if($_SESSION['showError'] == true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Passwords do not match. Please try again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['showError']);
}
else if($_SESSION['showEmailError'] == true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Email ID  is already in use. Please try logging in or use a different email address.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['showEmailError']);
}
$loginURL = $client -> createAuthUrl();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sign-up.css" type="text/css">

</head>

<body>
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.php" class="navbar-brand">
                    <img src="img/Capture.JPG" alt="logo" width="150">
                </a>
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt=""
                    class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                <p class="font-italic text-muted mb-0">You are at the best
                    platform to get Opportunities</p>
            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="partials/_handleSignUp.php" method="post">
                    <div class="row">

                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="firstName" type="text" name="firstname" placeholder="First Name"
                                class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="lastName" type="text" name="lastname" placeholder="Last Name"
                                class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address"
                                class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="countryCode" name="countryCode" style="max-width: 80px"
                                class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                                <option value="+91">+91</option>

                            </select>
                            <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" maxlength="10" 
                                class="form-control bg-white border-md border-left-0 pl-3" required>
                        </div>.


                        <!-- Job -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-black-tie text-muted"></i>
                                </span>
                            </div>
                            <select id="job" name="jobtitle"
                                class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="">Choose your job</option>
                                <option value="Artist">Artist</option>
                                <option value="PR Agency">PR Agency</option>
                                <option value="Manager">Manager</option>
                            </select>
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password"
                                class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="passwordConfirmation" type="password" name="passwordConfirmation"
                                placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <!-- <a href="#" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">Create your account</span>
                            </a> -->
                            <button type="submit" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">Create your account</span>
                            </button>
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <!-- Social Login -->
                        <div class="form-group col-lg-12 mx-auto">
                            <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                                <i class="fa fa-facebook-f mr-2"></i>
                                <span class="font-weight-bold">Continue with Facebook</span>
                            </a>
                            <a href="#" class="btn btn-primary btn-block py-2 btn-twitter">
                                <i class="fa fa-twitter mr-2"></i>
                                <span class="font-weight-bold">Continue with Twitter</span>
                            </a>
                            <a href="<?php echo $loginURL; ?>" class="btn btn-primary btn-block py-2 btn-google">
                                <i class="fa fa-google mr-2"></i>
                                <span class="font-weight-bold">Continue with Google</span>
                            </a>
                        </div>

                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Already Registered? <a href="login.php"
                                    class="text-primary ml-2">Login</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>



    <script async src="//jsfiddle.net/bootstrapious/3j4a0Lpsembed/"></script>
    <script src="/sign_up.js"></script>
    <script src="https://use.fontawesome.com/fa9660ba79.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>