<?php
include("./partials/admin_head.php");
include("./controller/admin_insert.php");
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card" style="background-color: rgb(201, 218, 206);">
                <h5 class="card-header">Admin Registration</h5>
                <div class="card-body m-2">
                    <form action="" method="POST">
                        <div class="form-group m-2">
                            <input type="text" class="form-control" id="userName" name="userName" placeholder="Username" autocomplete="nope">
                        </div>
                        <div class="form-group m-2">
                            <input type="email" class="form-control" id="email"name="email" placeholder="Email" autocomplete="nope">
                        </div>
                        <div class="form-group m-2">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="new-password">
                        </div>
                        <div class="text-center mt-3">
                            <a href='edit.php?id=$row[id]'><input type='submit' name='submit' value='Add Admin' class='bg-success text-light border rounded px-5 py-2'></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
if(isset($_POST["submit"]))
{
    // echo "Submit button is clicked";
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(AdminReg::adminData($userName, $email, $password))
    {
        echo"<script>alert('added')</script>";
        echo "<script>window.location.href = 'admin_display.php';</script>";
        // header("Location: admin_display.php");
        exit();
    }
    else{
        echo"Try signing up again";
    }
}
?>