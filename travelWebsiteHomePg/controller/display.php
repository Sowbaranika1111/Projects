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
            $sql = "SELECT * FROM `signup`";
        
            // Execute the query
            $result = $conn->prepare($sql);
            $result->execute();
            // Getting result set
            $resultSet = $result->get_result();
            // Getting no. of rows
            $numRows = $resultSet->num_rows;
            if ($numRows > 0) {
                while ($row = $resultSet->fetch_assoc()) {
                    $userData[] = $row;
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

