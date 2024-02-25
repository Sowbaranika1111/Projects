<?php
require 'db_config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["name"];
    $phone = $_POST["phone"];
}
$alreadyExists = mysqli_query($conn,"SELECT * from registrationform WHERE phone = '$phone' ");

if (mysqli_num_rows($alreadyExists)>0){
    echo json_encode(["success" => false,"Msg" => "User name exists!"]);
}