<?php
include("./partials/head.php");
include("./controller/admin_insert.php");
include("./partials/admin_header.php");
include("./partials/admin_footer.php");

?>

<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-6">
        <div class="card " style="background-color: rgb(201, 218, 206);">
          <h5 class="card-header">Admin Login</h5>
          <div class="card-body m-2">
            <form method="POST" action="">
              <div class="form-group m-2">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" autocomplete="nope">
              </div>
              <div class="form-group m-2">
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" autocomplete="new-password">
              </div>
              <a href="#" class="link d-flex justify-content-end mx-auto">Forgot Your Password?</a>
              <div class="text-center mt-3">
                <button type="submit" class="btn btn-success" name="submit">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (AdminReg::adminlogin($email, $password)) {
      header("Location: admin_display.php");
    } else {
      echo "<script>alert('Email does not exist')</script>";
    }
  }
  ?>