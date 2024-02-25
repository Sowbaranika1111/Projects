<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form2CRUD.css">
</head>

<body>
    <section class="mt-5  d-flex justify-content-center align-itmes-center">
        <div class="container bg">
            <form action="\" method="post" id="form" onsubmit="return checkValidity();" novalidate>

                <div class="row form-group">
                    <!-- Name  col-xl-6 col-lg-6 col-md-6 col-sm-6 col-->
                    <div class="col-md-6 col-sm-6  form-group">
                        <label for="name" class="col-form-label">Name:<span class="text-danger">*</span></label>
                        <input type="text" id="name" class=" form-control " name="name" placeholder="Enter your name " required />

                    </div>
                    <!-- Phone Number col-xl-6 col-lg-6 col-md-6 col-sm-6 col -->
                    <div class="col-md-6 col-sm-6 form-group">
                        <label for="phone" class=" col-form-label">Phone No:<span class="text-danger">*</span></label>
                        <input type="tel" id="phone" name="phoneNo" class=" form-control" required />

                    </div>

                    <!-- 2nd row Age col-xl-6 col-lg-6 col-md-6 col-sm-6 col  -->
                    <div class="row custom-select p-2 form-group">
                        <div class="col-md-6 col-sm-6 form-group">
                            <label for="age" class=" col-form-label">Age:<span class="text-danger">*</span>
                            </label>

                            <select name="age" id="age" class=" form-control custom-select custom-select-sm ">
                                <option value="Choose a category">Choose a category</option>
                                <option value="below 15"> Below 15 </option>
                                <option valu e="15-30"> 15-30 </option>
                                <option value="30-45"> 30-45 </option>
                                <option value="above 45"> Above 50 </option>
                            </select>
                        </div>
                        <!-- Gender col-xl-6 col-lg-6 col-md-6 col-sm-6 col -->
                        <div class="col-md-6 col-sm-6 form-group">
                            <label for="gender" class=" col-form-label custom-control-label">Gender:<span class="text-danger">*</span></label>

                            <div class="custom-control custom-radio ">
                                <input type="radio" id="male" class=" custom-control-input" name="gender" value="Male" />
                                <label for="male" class=" custom-control-label">Male</label>
                            </div>

                            <div class="custom-control custom-radio form-group">
                                <input type="radio" id="female" class=" custom-control-input " name="gender" value="Female" />
                                <label for="female" class="custom-control-label">Female</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" id="others" class=" custom-control-input inline" name="gender" value="Others" />
                                <label for="others" class=" custom-control-label">Others</label>
                            </div>
                        </div>
                        <!-- date col-xl-6 col-lg-6 col-md-6 col-sm-6 col-->
                        <div class="row form-group">
                            <div class="col-md-6 col-sm-6 form-group">
                                <label for="date" class=" col-form-label">Date of Birth:<span class="text-danger">*</span></label>
                                <input type="date" id="date" class="form-control" name="dob" min="2000-01-01" required />
                            </div>
                            <!-- Address col-xl-6 col-lg-6 col-md-6 col-sm-6 col -->
                            <div class="col-md-6 col-sm-6 form-group">
                                <label for="addr" class="col-form-label">Address:<span class="text-danger">*</span></label>
                                <textarea name="address" id="addr" class=" form-control " cols="5" rows="3" charswidth="70" placeholder="Enter your residential address" required></textarea>
                            </div>
                        </div>
                        <!-- checkbox for Robot -->
                        <div class="row form-group">
                            <div class="custom-control custom-checkbox col-form-label">
                                <input type="checkbox" id="robot" class="custom-control-input roboCheck" name="roboCheck">
                                <label for="robot" class="custom-control-label ">I am not a robot</label>
                            </div>
                        </div>
                        <!-- Submit -->
                        <!-- <div class="row form-group p-3">
                            <div class="col">
                                <button id="submit" class="btn btn-dark form-control " name="submit">Submit</button>
                            </div>
                        </div>  -->

                        <!-- Add a hidden Save button here -->
                        <div class="col d-grid">
                            <button id="save" name="save_update" class="btn btn-success btn-block" name="save_update">Save</button>
                        </div>
                    </div>

                </div>
        </div>
        </form>
        </div>
    </section>
    <br>
    <hr><br>
    <h2 style="text-align: center; font-family: monospace;"><b><i>REGISTERED USERS</i></b></h2>

    <script src="js/form2_alertOnInsert.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</body>

</html>


<?php
require 'db_config.php';

// Fetch data from the database
$query = "SELECT * FROM registrationform";
$result = mysqli_query($conn, $query);

if ($result) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form Data</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <section class="m-1 d-flex justify-content-center align-items-center text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-heading">
                        <h3>Id</h3>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-heading">
                        <h3>Name</h3>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-heading">
                        <h3>Phone</h3>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-heading">
                        <h3>Age</h3>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-heading">
                        <h3>Gender</h3>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-heading">
                        <h3>DOB</h3>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-heading">
                        <h3>Address</h3>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-heading">
                        <h3>Action</h3>
                    </div>
                </div>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                <div class="row">
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-data">
                        <p> ' . $row['id'] . ' </p>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-data">
                        <p> ' . $row['userName'] . ' </p>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-data">
                        <p> ' . $row['phone'] . ' </p>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-data">
                        <p> ' . $row['age'] . ' </p>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-data">
                        <p> ' . $row['gender'] . ' </p>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-data">
                        <p> ' . $row['dob'] . ' </p>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-data">
                        <p> ' . $row['addr'] . ' </p>
                    </div>
                    <div class="col-xl col-lg col-md col-sm col form-group tbl-data">
                        <form action="" method="post"> 
                        
                        <div>
                        <input type="hidden" name="update_id" value=" ' . $row['id'] . ' ">
                        <button class="btn btn-adjust btn-outline-success" id="update" type="submit" name="update">UPDATE</button> 
                        </div> 

                        <div>
                        <input type="hidden" name="delete_id" value=" ' . $row['id'] . ' ">
                        <button class="btn btn-adjust btn-outline-danger" type="submit" name="delete">DELETE</button>
                    </div>
    
                        </form>
                    </div>
                </div>';
    }

    echo '
            </div>
        </section>
        </body>
        </html>';
} else {
    echo "Error: " . mysqli_error($conn);
}

//                                          ==================================DELETE===================================
if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];

    // SQL query to delete the record with the given ID
    $delete_query = "DELETE FROM registrationform WHERE id = '$delete_id'";

    if (mysqli_query($conn, $delete_query)) {
        echo "Record with ID $delete_id deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}


//                                          ==================================UPDATE===================================

if (isset($_POST['update_id'])) {
    $update_id = $_POST['update_id'];

    $fetch_query = "SELECT * FROM registrationform WHERE id = '$update_id'";
    $user_data = mysqli_query($conn, $fetch_query);
    $user_row = mysqli_fetch_assoc($user_data);

    // Output JavaScript to populate the form fields
    echo '<script>
    document.getElementById("update_id").value = "' . $user_row['id'] . '";
    document.getElementById("name").value = "' . $user_row['userName'] . '";
    document.getElementById("phone").value = "' . $user_row['phone'] . '";
    document.getElementById("age").value = "' . $user_row['age'] . '";
    var gender = "' . $user_row['gender'] . '";
    if (gender === "Male") {
        document.getElementById("male").checked = true;
    } else if (gender === "Female") {
        document.getElementById("female").checked = true;
    } else {
        document.getElementById("others").checked = true;
    }
    document.getElementById("date").value = "' . $user_row['dob'] . '";
    document.getElementById("addr").value = "' . $user_row['addr'] . '";
    </script>';
}

if (isset($_POST['save_update'])) {
    $update_id = $_POST['update_id'];
    $update_name = $_POST['name'];
    $update_phone = $_POST['phone'];
    $update_age = $_POST['age'];
    $update_gender = $_POST['gender'];
    $update_dob = $_POST['date'];
    $update_address = $_POST['addr'];

    // Update the table with the new values
    $update_query = "UPDATE registrationform SET
                    userName = '$update_name',
                    phone = '$update_phone',
                    age = '$update_age',
                    gender = '$update_gender',
                    dob = '$update_dob',
                    addr = '$update_address'
                    WHERE id = '$update_id'";

    if (mysqli_query($conn, $update_query)) {
        echo "Record with ID $update_id updated successfully!";
    } else {
        echo "Error on updating record: " . mysqli_error($conn);
    }
}






























// if (isset($_POST['update'])) {
//     $update_id = $_POST['update_id'];

//     $fetch_query = "SELECT * FROM registrationform WHERE id = '$update_id'";
//     $user_data = mysqli_query($conn, $fetch_query);
//     $user_row = mysqli_fetch_assoc($user_data);

//     echo '<script>
//     document.getElementById("name").value = "' . $user_row['userName'] . '";
//             document.getElementById("phone").value = "' . $user_row['phone'] . '";
//             document.getElementById("age").value = "' . $user_row['age'] . '";
//             // Set the gender radio button based on the user\'s gender
//             var gender = "' . $user_row['gender'] . '";
//             if (gender === "Male") {
//                 document.getElementById("male").checked = true;
//             } else if (gender === "Female") {
//                 document.getElementById("female").checked = true;
//             } else {
//                 document.getElementById("others").checked = true;
//             }
//             document.getElementById("date").value = "' . $user_row['dob'] . '";
//             document.getElementById("addr").value = "' . $user_row['addr'] . '";

//             updateBtn = document.getElementById("update").
//             updateBtn.addEventListener("onclick",function)
//             </script>';
// }

// if (isset($_POST['save_update'])) {
//     $update_id = $_POST['update_id'];
//     $update_name = $_POST['update_name'];
//     $update_phone = $_POST['update_phone'];
//     $update_age = $_POST['update_age'];
//     $update_gender = $_POST['update_gender'];
//     $update_dob = $_POST['update_dob'];
//     $update_address = $_POST['update_address'];

//     // Update the table with the new values
//     $update_query = "UPDATE registrationform SET
//                     userName = '$update_name',
//                     phone = '$update_phone',
//                     age = '$update_age',
//                     gender = '$update_gender',
//                     dob = '$update_dob',
//                     addr = '$update_address'
//                     WHERE id = '$update_id'";

//     if (mysqli_query($conn, $update_query)) {
//         echo "Record with ID $update_id updated successfully!";
//     } else {
//         echo "Error on updating record: " . mysqli_error($conn);
//     }
// }

// mysqli_close($conn);