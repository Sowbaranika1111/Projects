<?php
include("./partials/head.php");
include("controller/admin_display.php");
include("./partials/admin_header.php");
include("./partials/admin_footer.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

$usersData = Display::display(); //Fetching data from database
// print($usersData); // ==> it is printing the type (Array-printed)
//print_r($usersData); // Displaying associative arrays in each index
?>
<div class="container bg-dark-subtle p-4 my-5">
    <h3 class="mx-auto px-2">Manage Admin</h3>
</div>
    <div class="container mt-4">
    <a href="" class="btn btn-success" data-toggle="modal" data-target="#addAdminModal">Add Admin</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usersData as $row) : ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["userName"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td>
                                <a href='admin_edit.php?id=<?php echo $row["id"]; ?>' class='btn btn-success'>Update</a>
                                <a href='admin_delete.php?id=<?php echo $row["id"]; ?>' class='btn btn-danger'>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap Modal for adding admin in a pop-up-->
<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">Add New Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="userNameModal">Username:</label>
                        <input type="text" id="userNameModal" name="userNameModal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="emailModal">Email:</label>
                        <input type="email" id="emailModal" name="emailModal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="passwordModal">Password:</label>
                        <input type="password" id="passwordModal" name="passwordModal" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST["submit"]))
{
    $userName = $_POST["userNameModal"];
    $email = $_POST["emailModal"];
    $password = $_POST["passwordModal"];

    if(AdminReg::adminData($userName, $email, $password))
    {
        echo "<script>alert('Admin added successfully')</script>";
        echo "<script>window.location.href = 'admin_display.php';</script>";
        exit();
    }
    else
    {
        echo "Failed to add admin. Please try again.";
    }
}
?>