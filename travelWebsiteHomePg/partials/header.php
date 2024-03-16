<?php
// Define menu items
$menuItems = array(
    array("text" => "HOME", "link" => "#"),
    array("text" => "LOGIN", "link" => "login.php"),
    array("text" => "SIGNUP", "link" => "signUp.php"),
    array("text" => "CONTACT US", "link" => "#")
);
?>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <p class="display-2 fw-bold d-flex align-items-center justify-content-start pt-3 px-1">Iniya travels</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-success"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end text-end pt-4" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <?php foreach ($menuItems as $item) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>