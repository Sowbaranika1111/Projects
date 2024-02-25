<?php

if (isset($_POST['update'])) {
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