<?php
include 'db_conn.php';

class AdminReg
// =============================For Signup====================================
{
    public static function adminData($userName, $email, $password)
    {
        $conn = Database::getConnection();
        $sql = "Insert Into `admindata`(`userName`,`email`,`password`)
        Values('$userName','$email',$password)";
        try {
            $result = $conn->query($sql);
            if (!$result) {
                throw new Exception("Error: " . $conn->error);
            }
            return true;
        } catch (Exception $e) {
            // Log the error instead of echoing it
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
// ==============================For Login=====================================
    
    public static function adminlogin($email, $password)
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `admindata` WHERE `email` = '$email' AND `password` = '$password'";

        try {
            $result = $conn->query($sql);

            if (!$result) {
                throw new Exception("Error: " . $conn->error);
            }

            // to check if any row was returned
            if ($result->num_rows > 0) {
                // print("login success");
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            // Log the error instead of echoing it
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
}

// ========================Food category insertion========================
class FoodCategoryInsert
{
    public static function food_category($title, $featured, $is_available)
    {
        $conn = Database::getConnection();

        $sql = "INSERT INTO food_category('title','featured','is_available')
                VALUES ('$title', '$featured', '$is_available') ";

        try {
            $result = $conn->query($sql);

            if (!$result) {
                throw new Exception("". $conn->error);
            }
            return true;
        }
        catch (Exception $e) {
            error_log("Error detected". $e->getMessage());
            return false;
        }
    }
}