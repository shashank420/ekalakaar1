<?php
require "googlelogin/config.php";
session_start();
if (!isset($_SESSION['showNoAccount']) || !isset($_SESSION['passwordError']) || !isset($_SESSION['passwordChanged']) || !isset($_SESSION['emailexistsGoogle']) || !isset($_SESSION['emailexistsSignup']) || !isset($_SESSION['showEmailError'])) {
    $_SESSION['showEmailError'] = false;
    $_SESSION['showNoAccount'] = false;
    $_SESSION['passwordError'] = false;
    $_SESSION['passwordChanged'] = false;
    $_SESSION['emailexistsGoogle'] = false;
    $_SESSION['emailexistsSignup'] = false;
}
else if($_SESSION['showNoAccount'] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> No account exists with the given credentials. Please try again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['showNoAccount']);
}
else if ($_SESSION['passwordError'] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['passwordError']);
}
else if($_SESSION['passwordChanged'] == true){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Password has been changed successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['passwordChanged']);
}
else if($_SESSION['emailexistsGoogle'] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Account already exists with this email address. Please login with Google.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';  
  unset($_SESSION['emailexistsGoogle']);
}
else if($_SESSION['showEmailError'] == true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Email ID  is already in use. Please try logging in or use a different email address.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['showEmailError']);
}
else if($_SESSION['emailexistsSignup'] == true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Account already exists with this email address. Please login with your credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['emailexistsSignup']);
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
    <link href="login.css" rel="stylesheet" type="text/css">
    <title>Login</title>
    
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row">
                           <a href="index.php"> <img src="img/Capture.JPG" class="logo"></a>
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="img/transeparendt/pht (1).png" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                            <div class="facebook text-center mr-3">
                                <div class="fa fa-facebook"></div>
                            </div>
                            <div class="twitter text-center mr-3">
                                <div class="fa fa-twitter"></div>
                            </div>
                            <div class="google text-center mr-3">
                                <a href="<?php echo $loginURL; ?>">
                                <div class="fa fa-google"></div>
                            </a>
                            </div>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <small class="or text-center">Or</small>
                            <div class="line"></div>
                        </div>
                        <form action="partials/_handleLogin.php" method="post">
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input class="mb-4" type="email" name="email" placeholder="Enter a valid email address" required>
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input type="password" name="password" placeholder="Enter password" required>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                                    <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                                </div>
                                <a href="forgot_password.php" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-blue text-center">Login</button>
                            </div>
                            <div class="row mb-4 px-3">
                                <small class="font-weight-bold">Don't have an account? <a
                                        class="text-danger" href="sign-up.php">Register</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022 by Ekalakaar. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto">
                    <span class="fa fa-facebook mr-4 text-sm"></span>
                    <span class="fa fa-google-plus mr-4 text-sm"></span>
                    <span class="fa fa-linkedin mr-4 text-sm"></span>
                    <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://use.fontawesome.com/fa9660ba79.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>

</html>