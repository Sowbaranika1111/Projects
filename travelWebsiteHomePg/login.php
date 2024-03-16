<?php include "./partials/head.php";
include 'controller/insert.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="loginRegister-body">
    <div class="container">
        <div class="row mt-5 py-3 ">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                <h2 class="text-center pt-3">Login</h2>
                <p class="text-center text-muted lead mb-4">Join Us And Transform Your Experience</p>

                <!-- Form start -->
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="email" class="col-lg-4 col-form-label">Email:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" name="email" id="email" autocomplete="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-lg-4 col-form-label">Password:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="password" id="password" required />
                        </div>
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-success" name="submit">Sign in</button>
                            <p class="text-center text-muted mt-2"> Register now for free by clicking here - <a href="signUp.php">Register</a></p>
                            <!-- <a href="travel.php" class="home-page text-center text-bold mt-2 fw-bold border-top border-5 p-3">INIYA TRAVELS</a> -->
                        </div>
                </form>
                <!-- Form end -->
                
            </div>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Attempt to login
    if (User::login($email, $password)) {
        // If login successful, redirect to travel.php
        header("Location: travel.php");
        exit(); // Stop further execution
    } else {
        // Handle login failure, maybe display an error message
        echo "Login failed. Please check your credentials.";
    }
}
?>