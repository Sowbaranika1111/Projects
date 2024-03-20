<?php
// Define an array of links and their corresponding text
$linkTextPairs = array(
    "Email" => "#",
    "GitHub" => "#",
    "Instagram" => "#",
    "Facebook" => "#"
);
?>
<footer class="bg-dark text-white text-center py-4 footer-sec">
<div class="container">
    <div class="row">
        <?php foreach ($linkTextPairs as $text => $link) : ?>
            <div class="col-md-3">
                <a href="<?php echo $link; ?>" class="text-white text-decoration-none"><?php echo $text; ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>