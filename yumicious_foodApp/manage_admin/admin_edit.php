<?php
include "./partials/head.php";
include 'controller/admin_display.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $userData = Display::display();
    $userDetailsRow = null;
    foreach ($userData as $row) {
        if ($row['id'] == $id) {
            $userDetailsRow = $row;
            break;
        }
    }
}
?>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card" style="background-color: rgb(201, 218, 206);">
                <h5 class="card-header">Admin Details Updation</h5>
                <div class="card-body m-2">
                    <form action="" method="POST">
                        <div class="form-group m-2">
                            <input type="text" class="form-control" id="userName" name="userName" value="<?php echo isset($userDetailsRow['userName'])? $userDetailsRow['userName']:'' ?>" placeholder="Username">
                        </div>
                        <div class="form-group m-2">
                            <input type="email" class="form-control" id="email"name="email" value="<?php echo isset($userDetailsRow['email'])? $userDetailsRow['email']:'' ?>" placeholder="Email" >
                        </div>
                        <div class="form-group m-2">
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($userDetailsRow['password'])? $userDetailsRow['password']:'' ?>" placeholder="Password" >
                        </div>
                        <div class="text-center mt-3">
                            <a href='edit.php?id=$row[id]'><input type='submit' name='submit' value='Update Details' class='bg-success text-light border rounded px-5 py-2'></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Handle form submission
    $fname = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

        try {
            $conn = Database::getConnection();
            $sql = "UPDATE adminData SET userName = ?,  email = ?, password = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$_POST['userName'], $_POST['email'], $_POST['password'], $_GET['id']]);

            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Record Updated')</script>";
                echo "<script>window.location.href = 'admin_display.php';</script>";
                exit();
            } elseif ($stmt->affected_rows == 0) {
                echo "<script>alert('No change is found')</script>";
                echo "<script>window.location.href = 'admin_display.php';</script>";
                //When you use header("Location: admin_display.php"), it will redirect the user to display.php immediately without waiting for the alert to be displayed in the browser.
                //header("Location: display.php"); so use Windows.location from Javascript
                exit();
            } else {
                echo 'Not Updated';
                echo "<script>window.location.href = 'admin_display.php';</script>";
            }
        } catch (PDOException $e) {
            error_log("Error: " . $e->getMessage());
            echo 'Error on updating data';
        }
    }
}

?>