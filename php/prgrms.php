<?php
////=================Area of a circle===============
//$pi = 3.14;
//// $radius = readline("Enter the radius of a circle: ");
//echo "Enter the radius";
//$radius = trim(fgets(STDIN));
//$area = $pi * ($radius ** 2);
//echo "Area of the circle: $area";
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of the circle</title>
</head>
<body>
=======================================Area of a circle=============== 
    <form method="POST" action="">
        <label for="radius">Enter the radius of the circle: </label>
        <input type="number" id="radius" name = "radius" required>
        <button type="submit">Calculate</button>
    </form>
<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST"){
// $pi = 3.14;
// $radius = $_POST["radius"];
// $area = $pi * ($radius ** 2);
// echo "<p> Area of the circle: $area</p>";
?>
</body>
</html> -->

<!-- ===================================================== -->
 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths Basic Operations</title>
</head>
<body>
=================Math Basic Operations===============
    <form method="POST" action="">
        <label for="num1">Enter 1st number:  </label>
        <input type="number" id="num1" name = "num1" required>
        <br><br>
        <label for="num2">Enter 2nd number:  </label>
        <input type="number" id="num2" name = "num2" required>
        <br><br>
        <button type="submit">Calculate</button>
        <br><br>
    </form>  -->
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // $num1 = $_POST['num1'];
    // $num2 = $_POST['num2'];
    // echo "<p> Number 1 : ".$num1."</p>";
    // echo "<p> Number 2 : ".$num2."</p>" ;
    // echo  "<p>Sum: ".$num1 + $num2 ."</p>";
    // echo  "<p>Difference: ".$num1 - $num2 ."</p>";
    // echo  "<p>Product: ".$num1 * $num2 ."</p>";
    // echo  "<p>Quotient: ".$num1 / $num2 ."</p>";
    // }
    ?>
</body>
</html> 
<!-- ============================================NameAge================================== -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
        <label for="name">Name: </label>
        <input type="text" id="name" name = "name" required>
        <br><br>
        <label for="age">Age: </label>
        <input type="number" id="age" name = "age" required>
        <br><br>
        <button type="submit">Submit</button>
        <br><br>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $age = $_POST['age'];
    echo "<br> Name: " . $name . ",<br> Age: ", $age . "<br>";
}
    ?>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths Basic Operations</title>
</head>
<body> -->
<!-- =====================================Area of a Triangle============================ -->
<!-- <form method="POST" action="">
        <label for="base">Base: </label>
        <input type="number" id="base" name = "base" required>
        <br><br>
        <label for="height">Height: </label>
        <input type="number" id="height" name = "height" required>
        <br><br>
        <button type="submit">Calculate</button>
        <br><br>
    </form> -->
<?php
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $half = 0.5;
//     $base = $_POST["base"];
//     $height = $_POST["height"];
//     echo "<p> Base : ".$base."</p>";
//     echo "<p> Height : ".$height."</p>" ;
//     echo "<p>Area of the triangle : ".$half * $base * $height."</p>";
// }
?>
<!-- </body>
</html> -->

<!-- ============================================Leap Year=============================================== -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year or not</title>
</head>
<body>
    <form method="POST" action="">
        <label for="year">Enter a year: </label>
        <input type="number" id="year" name = "year" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form> -->
<?php
// if($_SERVER["REQUEST_METHOD"]== "POST"){
//     $year = $_POST["year"];
//     if($year % 4 == 0){
//         if($year % 400 == 0 || $year % 100 != 0){
//             echo "The entered year ".$year." is a leap year";
//         }
//         else{
//             echo "The entered year ".$year." is not a leap year";
//         }
//     }
//     else{
//         echo "The entered year ".$year." is not a leap year";
//     }
// }
?>
<!-- </body>
</html> -->

<!-- ==============================Prime number============================== -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <form method="POST" action="">
        <label for="prime">Enter a number: </label>
        <input type="number" id="prime" name="prime" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>   -->
<?php
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $prime = $_POST["prime"];
//     $is_prime = true;
//     echo "The entered number is: ".$prime." ";
//     if ($prime > 1){
//         for ($i = 2; $i <= ($prime**0.5) ; $i++){
//             if ($prime % $i == 0){
//                 $is_prime = false;
//                 break;
//             }
//         }
//     }
//     if($is_prime){
//         echo "<p>True</p>";
//     }
//     else{
//         echo "<p>False</p>";
//     }
// }
?>
<!-- </body>
</html> -->

<!-- ================================Run-time input================================ -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="age">Age: </label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <button type="submit">Submit</button>
        <br><br>
    </form> -->
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $userData = array(
    //         'name' => '',
    //         'age' => ''
    //     );
    //     $userData = array(
    //         $name = $_POST['name'],
    //         $age = $_POST['age']
    //     );
    //     // foreach ($userData as $userName => $userAge) {
    //         echo "Name : ".$name. "<br> Age : ".$age. "<br>";
    //     }
    // }
    ?>
</body>
</html>
<!-- ======================================= Manual input==================================== -->
<?php
// $userInput = array(
//     array('name' => "Joe", 'age' => 25),
//     array("name" => "Johan", 'age' => 30),
//     array("name" => "Johan", 'age' => 30)
// );
// foreach ($userInput as $person) {
//     echo "<br> Name: " . $person['name'] . ",Age: ", $person['age'] . "<br>";
// }
?>