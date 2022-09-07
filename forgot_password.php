<?php
require "partials/_bootstrap.php";
if (!isset($_SESSION['emailNotExists'])) {
    $_SESSION['emailNotExists'] = false;
}
else if($_SESSION['emailNotExists'] == true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> No account found with given email address. Please sign-up.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($_SESSION['emailNotExists']);
}
?>
<title>Forgot Password</title>
<div class="container my-5">
<form action="reset_password.php" method="post">
    <input type="email" class="form-control" name="forgotpasswdemail" placeholder="Enter your email address">
    <button class="btn btn-primary my-3" type="submit">
        Next
    </button>
</form>
</div>