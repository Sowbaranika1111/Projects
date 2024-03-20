<?php
include("./partials/admin_head.php");
include("controller/admin_display.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

$usersData = Display::display(); //Fetching data from database
// print($usersData); // ==> it is printing the type (Array-printed)
//print_r($usersData); // Displaying associative arrays in each index
?>
<div class="container bg-dark-subtle p-4 my-5">
    <h3 class="mx-auto px-2">Manage Admin</h3>

    <div class="container mt-4">
        <a href='admin_registration.php'><input type='submit' value="Add admin" name='submit' class='bg-success text-light border rounded'></a>

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
