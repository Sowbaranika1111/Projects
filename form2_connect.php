<?php

require 'db_config.php';

// function confirmationBox($msg)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //get the data
  $userName = $_POST["name"];
  $phone = $_POST["phoneNo"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $dob = $_POST["dob"];
  $addr = $_POST["address"];

  $alreadyExists = mysqli_query($conn, "SELECT * FROM registrationform WHERE phone = '$phone'");
  if (mysqli_num_rows($alreadyExists) > 0) {
    echo json_encode(["success" => false, "Msg" => "Phone number already exists!", "data" => "0"]);
  } else {

    // $query = "INSERT INTO registrationform (userName, phone, age, gender, dob, addr)
    //               VALUES (:userName, :phone, :age, :gender, :dob, :addr)";

    $query = "INSERT INTO registrationform (userName, phone, age, gender, dob, addr)
        VALUES ('$userName', '$phone', '$age', '$gender', '$dob', '$addr')";

    if ($conn->query($query) === TRUE) {
      echo json_encode(["success" => true, "Msg" => "New record created successfully", "data" => "1"]);
    } else {
      echo json_encode(["success" => false, "Msg" => "New record created Error", "data" => "0"]);
    }
  }
}

















// function confirmationBox($msg){

//     echo '<script>';

//     echo 'if(confirm("'.$msg.'")){';
//         echo 'document.location = "http://localhost/bootstrap/form2.html"';
//     echo '}'; 

//     echo '</script>';
// }












    






 ////working
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "myfirstdatabase";

// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     // Retrieve form data
//     $userName = $_POST["name"];
//     $phone = $_POST["phoneNo"];
//     $age = $_POST["age"];
//     $gender = $_POST["gender"];
//     $dob = $_POST["dob"];
//     $addr = $_POST["address"];

//     // Prepare and bind the statement
//     $stmt = $conn->prepare("INSERT INTO registrationform (userName, phone, age, gender, dob, addr) VALUES (?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("ssisss", $userName, $phone, $age, $gender, $dob, $addr);

//     // Execute the statement
//     if ($stmt->execute()) {
//         echo "Registration successful!";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Close the statement and connection
//     $stmt->close();
//     $conn->close();
// } 
// 
