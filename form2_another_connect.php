<?php
$userName = $_POST["name"];
$phone = $_POST["phoneNo"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$addr = $_POST["address"];
// $roboCheck = $_POST ["roboCheck"];

if (!empty($userName) || !empty($phone) || !empty($gender) || !empty($dob) || !empty($addr)) {

    $host = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbname = "myfirstdatabase";

    //creating connection

    $connection = new mysqli($host, $dbUserName, $dbPassword, $dbname);

    if (mysqli_connect_error()) {

        die("Connect Error(" . mysqli_connect_error() . ")" . mysqli_connect_error());
    } else {
        $SELECT = "SELECT phone From registrationform Where phone = ? Limit 1";
        $INSERT = "INSERT Into registrationform(userName,phone,age,gender,dob,addr) values(?,?,?,?,?,?)";

        //Prepare statement
        $stmnt = $connection->prepare($SELECT);
        $stmnt->bind_param("i", $phone);
        $stmnt->execute();
        $stmnt->bind_result($phone);

        $stmnt->store_result();
        $rowNum = $stmnt->num_rows;

        if ($rowNum == 0) {
            $stmnt->close();

            $stmnt = $connection->prepare($INSERT);
            $stmnt->bind_param("siisss", $userName, $phone, $age, $gender, $dob, $addr);
            $stmnt->execute();

            $alertMessage = "New Record inserted successfully!";
            echo '<script>';
            echo 'alert("New Record inserted successfully!")';
            // echo 'window.location.href = "form2.php";';
            echo '</script>';
        } else {

            $alertMessage = "Phone number already existing!";
            echo '<script>';
            echo 'alert("Phone number already existing!")';
            //echo 'document.location = "form2.html";';
            echo '</script>';
        }
        $stmnt->close();
        $connection->close();
    }
} else {
    $alertMessage = "All fields are required!";
    echo '<script>';
    echo 'alert("All fields are required!")';
    // echo 'window.location.href = "form2.php";';
    echo '</script>';
    die();
}
