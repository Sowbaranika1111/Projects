<?php 
include "./partials/head.php";
include 'controller/insert.php';
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row mt-2 ">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                <h2 class="text-center pt-3">Signup Now</h2>
                <p class="text-center text-muted lead mb-4">Experience The Taste Of Taste</p>
                <form action="" method="POST" >
                    <div class="mb-3 row">
                        <label for="firstName" class="col-lg-4 col-form-label">First Name:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="firstName" id="firstName" required/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lastName" class="col-lg-4 col-form-label">Last Name:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="lastName" id="lastName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-lg-4 col-form-label">Email:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" name="email" id="email" required/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-lg-4 col-form-label">Password:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="password" id="password" required/>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success" name="submit">Signup</button>
                        <p class="text-center text-muted mt-2">When you register by clicking the Signup Button, you
                            agree to our <a href="#">Terms and
                                Conditions</a> and <a href="#">Privacy Policy</a></p>
                        <p class="text-center">Already have an account?<a href="login.php">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
if(isset($_POST["submit"]))
{
    // echo "Submit button is clicked";
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(User::signup($firstName,$lastName,$email,$password)){
        header("Location: login.php");
        exit();
    }
    else{
        echo "Signup failed";
    }
}   
?>