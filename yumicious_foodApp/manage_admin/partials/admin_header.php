<?php
// Define an array of navigation links
$navLinks = array(
    array("Home", "#"),
    array("Admin", "admin_login.php"),
    array("Category", "#"),
    array("Food", "#"),
    array("Order", "#"),
    array("Customers", "../display.php"),
    array("Logout", "#")
);
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
                <a class="navbar-brand bg-body-secondary" href="#">Yumicious</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center bg-body-secondary" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php foreach ($navLinks as $link) : ?>
                            <a class="nav-link <?php echo ($link[0] == "Home") ? "active" : ""; ?>" href="<?php echo $link[1]; ?>"><?php echo $link[0]; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


