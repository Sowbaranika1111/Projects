<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Login Form Example</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css"> -->

</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="card" style="background-color: rgb(201, 218, 206);">
                    <h5 class="card-header">Admin Registration</h5>
                    <div class="card-body m-2">
                        <form>
                            <div class="form-group m-2">
                                <input type="text" class="form-control" id="userName" placeholder="Username" autocomplete="nope">
                            </div>
                            <div class="form-group m-2">
                                <input type="email" class="form-control" id="email" placeholder="Email" autocomplete="nope">
                            </div>
                            <div class="form-group m-2">
                                <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="new-password">
                            </div>
                            <div class="text-center mt-3">
                                <a href='edit.php?id=$row[id]'><input type='submit' value='Add Admin' class='bg-success text-light border rounded px-5 py-2'></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>