<?php

require 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $phone = $_POST['phone'];

    $query = "SELECT * FROM registrationform WHERE phone = '$phone'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Phone number already exists
        echo json_encode(["success" => false, "Msg" => "Phone number already exists!", "data" => "0"]);
    } else {
        // Phone number is unique
        echo json_encode(["success" => true]);
    }

    mysqli_close($conn);
}
