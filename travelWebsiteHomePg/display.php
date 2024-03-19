<?php
include("./partials/head.php");
include("controller/display.php");
error_reporting(E_ALL);
ini_set("display_errors",1);

$usersData = Display::display(); //Fetching data from database
// print($usersData); // ==> it is printing the type (Array-printed)
//print_r($usersData); // Displaying associative arrays in each index
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usersData as $row){
        echo("<tr>");
        echo"<td>".$row["id"]."</td>";
        echo"<td>".$row["firstName"]."</td>";
        echo"<td>".$row["lastName"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"<td>".$row["password"]."</td>";
        echo "<td><a href='edit.php?id=$row[id]'>Update</a><td>";
        echo "</tr>";
        }?>
    </tbody>
</table>
















<?php //// Don't follow the below method..always have a separate file for the php methods and from there fetch and display in a separate file.
// if (!$result) {
    //     throw new Exception("Error executing query: " . $conn->error);
    // }

//     if ($result->num_rows > 0) {
//         echo '<div class="container">
//                     <div class="row headings-bg">
//                         <div class="col-md-1 text-center border">
//                             <h5>ID</h5>
//                         </div>
//                         <div class="col-md-3 text-center border">
//                             <h5>First name</h5>
//                         </div>
//                         <div class="col-md-3 text-center border">
//                             <h5>Last name</h5>
//                         </div>
//                         <div class="col-md-3 text-center border">
//                             <h5>Email</h5>
//                         </div>
//                         <div class="col-md-2 text-center border">
//                             <h5>Password</h5>
//                         </div>
//                     </div>';

//         while ($row = $result->fetch_assoc()) {
//             echo '<div class="row">
//                         <div class="col-md-1 border text-center">' . $row['id'] . '</div>
//                         <div class="col-md-3 border text-center">' . $row['firstName'] . '</div>
//                         <div class="col-md-3 border text-center">' . $row['lastName'] . '</div>
//                         <div class="col-md-3 border text-center">' . $row['email'] . '</div>
//                         <div class="col-md-2 border text-center">' . $row['password'] . '</div>
//                     </div>';
//         }
//         echo '</div>';
//     } else {
//         echo "No users found.";
//     }
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
//
// }
?>
