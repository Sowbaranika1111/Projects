<?php
include "./partials/head.php";
// include "db_conn.php"; 
include 'controller/display.php';
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

<body class="loginRegister-body">
    <div class="container">
        <div class="row mt-2 ">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                <h2 class="text-center pt-3">Update Data</h2>
                <!-- Form start -->
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="firstName" class="col-lg-4 col-form-label">First Name:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo isset($userDetailsRow['firstName']) ? $userDetailsRow['firstName'] : '' ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lastName" class="col-lg-4 col-form-label">Last Name:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo isset($userDetailsRow['lastName']) ? $userDetailsRow['lastName'] : '' ?>" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-lg-4 col-form-label">Email:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo isset($userDetailsRow['email']) ? $userDetailsRow['email'] : '' ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-lg-4 col-form-label">Password:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="password" id="password" value="<?php echo isset($userDetailsRow['password']) ? $userDetailsRow['password'] : '' ?>" required />
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <p class="text-center text-muted mt-2">You can update your data any number of times by logging in<a href="#">Terms and
                                Conditions</a> and <a href="#">Privacy Policy</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Handle form submission
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

        try {
            $conn = Database::getConnection();
            $sql = "UPDATE signup SET firstName = ?, lastName = ?, email = ?, password = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_GET['id']]);

            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Record Updated')</script>";
                echo "<script>window.location.href = 'display.php';</script>";
                exit();
            } elseif ($stmt->affected_rows == 0) {
                echo "<script>alert('No change is found')</script>";
                echo "<script>window.location.href = 'display.php';</script>";
                //When you use header("Location: display.php"), it will redirect the user to display.php immediately without waiting for the alert to be displayed in the browser.
                //header("Location: display.php"); so use Windows.location from Javascript
                exit();
            } else {
                echo 'Not Updated';
                echo "<script>window.location.href = 'display.php';</script>";
            }
        } catch (PDOException $e) {
            error_log("Error: " . $e->getMessage());
            echo 'Error on updating data';
        }
    }
}

?>