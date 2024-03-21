<?php 
include("./partials/head.php");
include("./controller/admin_display.php");
include("./partials/admin_footer.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);

$foodData = FoodCategoryDisplay::food_category_display();
?>

<div class="container bg-dark-subtle p-4 my-5">
    <h3 class="mx-auto px-2">Manage Food Category</h3>
</div>
    <div class="container mt-4">
        <a href='food_category_form.php'><input type='submit' value="Add Food" name='submit' class='bg-success text-light border rounded'></a>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Is_Available</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($foodData as $row) : ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td><?php echo $row["featured"]; ?></td>
                            <td><?php echo $row["is_available"]; ?></td>

                            <td>
                                <a href='food_category_edit.php?id=<?php echo $row["id"]; ?>' class='btn btn-success'>Update</a>
                                <a href='food_category_delete.php?id=<?php echo $row["id"]; ?>' class='btn btn-danger'>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
