<?php
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

// try{
//     $conn = new PDO($dsn,$dbusername,$dbpassword);
//     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//     echo '<script> alert("Could not connect: '.$e -> getMessage().' ") </script>';
// }

$DbName = "myfirstdatabase";
$username = "root";
$password = "";
$HostName = "localhost";

// Create connection
$conn = mysqli_connect($HostName, $username, $password,$DbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    // echo "Connected successfully";
}




























// //  working
//     $userName = $_POST['name'];
//     $phone = $_POST['phoneNo'];
//     $age = $_POST['age'];
//     $gender = $_POST['gender'];
//     $dob = $_POST['dob'];
//     $addr = $_POST['address'];

//     //Database Connection

//     $conn = new mysqli('localhost','root','','myfirstdatabase');
//     if($conn -> connect_error){
//         die('Connection failed : '.$conn->connect_error);
//     }else{
//         $stmnt = $conn->prepare("Insert into registration(userName,phone,age,gender,dob,addr) values (?,?,?,?,?,?)");
//         $stmnt -> bind_param("siisss",$userName,$phone,$age,$gender,$dob,$addr);
//         $stmnt -> execute();
//         echo "Registration successful!";
//         $stmnt -> close();
//         $stmnt -> close();
//     }
