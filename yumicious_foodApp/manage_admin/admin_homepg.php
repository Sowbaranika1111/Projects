<?php
include("./partials/head.php");
include("./partials/admin_header.php");
$title = 'Dashboard' ?>

<head><?php $title ?></head>


<body>
        <header class="bg-light border m-2 py-2">
            <div class="container-fluid d-flex justify-content-center align-items-center m-2 p-2">
                <h1 class="m-0 ">Dashboard</h1>
            </div>
        </header>
        <main class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="summary bg-light p-3 text-center border border-dark-subtle">
                            <span class="display-4">10</span>
                            <p class="lead">Categories</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="summary bg-light p-3 text-center border border-dark-subtle">
                            <span class="display-4">45</span>
                            <p class="lead">Foods</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="summary bg-light p-3 text-center border border-dark-subtle">
                            <span class="display-4">15</span>
                            <p class="lead">Total Orders</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="summary bg-light p-3 text-center border border-dark-subtle">
                            <span class="display-4">Rs.200</span>
                            <p class="lead">Revenue Generated</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>