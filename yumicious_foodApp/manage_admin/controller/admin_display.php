<?php
include("db_conn.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Display
{
    public static function display()
    {
        try {
            $conn = Database::getConnection();
        
            $userData = array();
            $sql = "SELECT * FROM `admindata`";
        
            // Execute the query
            $result = $conn->prepare($sql);
            $result->execute();
            $resultSet = $result->get_result();
            $numRows = $resultSet->num_rows;
            if ($numRows > 0) {
                while ($userDetailsRow = $resultSet->fetch_assoc()) {
                    $userData[] = $userDetailsRow;
                }
                return $userData;
            } else {    
                print("No rows found");
            }
        } catch (PDOException $e) 
        {
            error_log("Error: ".$e->getMessage());
            return false;
        }
    }
}
//==================================FoodCategoryDisplay=================================
class FoodCategoryDisplay
{
    public static function food_category_display()
    {
        try {
            $conn = Database::getConnection();  
            $foodData = array();

            $sql = "SELECT * FROM food_category";
            $result = $conn->prepare($sql);
            $result->execute();
            $resultSet = $result->get_result();
            $numRows = $resultSet->num_rows;
            if ($numRows > 0) {
                while ($foodRow = $resultSet->fetch_assoc()) {
                    // Convert is_available to "Yes" or "No"
                    $foodRow['is_available'] = $foodRow['is_available'] ? "Yes" : "No";
                    $foodData[] = $foodRow;
                }
            }
            return $foodData; // Return the fetched data
        } catch (PDOException $e) {
            error_log("Error: ".$e->getMessage());
            return false;
        }
    }
}

// class FoodCategoryDisplay
// {
//     public static function food_category_display()
//     {
//         try {
//             $conn = Database::getConnection();  
//             $foodData = array();

//             $sql = "SELECT * FROM food_category";
//             $result = $conn->prepare($sql);
//             $result->execute();
//             $resultSet = $result->get_result();
//             $numRows = $resultSet->num_rows;
//             if ($numRows > 0) {
//                 while ($foodRow = $resultSet->fetch_assoc()) {
//                     $foodData[] = $foodRow;
//                 }
//             }
//         }
//         catch (PDOException $e)
//         {
//             error_log("Error: ".$e->getMessage());
//             return false;
//         }
//     }
// }

