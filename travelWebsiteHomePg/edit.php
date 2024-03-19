<?php
// include "./partials/head.php";
// include "db_conn.php";
// include 'controller/display.php';
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


// // echo $_GET['id'];
// $id = $_GET['id'];

// $sql = "SELECT * FROM `signup` WHERE id='$id'";

// // Execute the query
// $data = mysqli_query($conn, $sql);

// // Getting no. of rows
// $numRows = mysqli_num_rows($data);
// $userDetailsRow = mysqli_fetch_assoc($data);

include "./partials/head.php";
// include "db_conn.php"; 
include 'controller/display.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch user details by ID
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


    ////Update user data in the database
    // try {
    //     $conn = Database::getConnection();
    //     $sql = "UPDATE signup SET firstName = ?, lastName = ?, email = ?, password = ? WHERE id = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute([$fname, $lname, $email, $password, $_GET['id']]);

    //     if ($stmt->affected_rows > 0) {
    //         echo 'Data Updated';
    //     } else {
    //         echo 'Not Updated';
    //     }
    // } catch (PDOException $e) {
    //     error_log("Error: " . $e->getMessage());
    //     echo 'Error updating data';
    // }
    //======================new
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Handle form submission
        // Update user data in the database
        try {
            $conn = Database::getConnection();
            $sql = "UPDATE signup SET firstName = ?, lastName = ?, email = ?, password = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_GET['id']]);
    
            if ($stmt->affected_rows > 0) {
                echo 'Data Updated';
            }
            elseif($stmt->affected_rows == 0){
                echo 'No change is found';
            } else {
                echo 'Not Updated';
            }
        } catch (PDOException $e) {
            error_log("Error: " . $e->getMessage());
            echo 'Error updating data';
        }
    }
}


// if (isset($_POST['submit'])) {
//     $fname = $_POST['firstName'];
//     $lname = $_POST['lastName'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query = "INSERT INTO signup (firstName,lastName,email,password) VALUES ('$fname','$lname','$email','$password')";
//     $data = mysqli_query($conn, $query);
//     $total = mysqli_num_rows($data);

//     if ($data) {
//         echo 'Data Updated';
//     } else {
//         echo 'Not Updated';
//     }
// }
?>