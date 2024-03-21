<?php
include("admin_insert.php");
include("./partials/head.php");
include("./partials/admin_footer.php");
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
            <h2 class="text-center pt-3">New food category</h2>
            <form action="" method="POST">
                <div class="mb-3 row">
                    <label for="title" class="col-lg-4 col-form-label">Title:<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="title" id="title" required />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="image" class="col-lg-4 col-form-label">Image:<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="file" class="form-control" name="image" id="image">
                        <button type="button" class="btn btn-light border mt-2" onclick="resetImage()">Cancel Image</button>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="featured" class="col-lg-4 col-form-label">Featured:<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="featured" id="featured">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="is_available" class="col-lg-4 col-form-label">Is Available:<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="is_available" name="is_available">
                            <label class="form-check-label" for="is_available">
                                Available
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success" name="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function resetImage() {
        document.getElementById('image').value = '';
    }
</script>

<?php
if(isset($_POST["submit"]))
{
    $title = $_POST["title"];
    $featured = $_POST["featured"];
    $is_available = $_POST["is_available"];

    if (FoodCategoryInsert::food_category($title,$featured,$is_available)){
        echo "<script>alert('New food category added')</script>";
        // echo "<script>window.location.href()</script>";
    }
    else{
        echo "Try adding again after some time :(";
    }
}
?>