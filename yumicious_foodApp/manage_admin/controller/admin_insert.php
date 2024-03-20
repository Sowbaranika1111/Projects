<?php
include 'db_conn.php';

class AdminReg
// =================For Signup================
{
    public static function adminData($username, $email, $password)
    {
        $conn = Database::getConnection();
        $sql = "Insert Into `adminData`(`username`,`email`,`password`)
        Values('$username','$email',$password)";
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

    // =============For Login=============
    
    public static function login($email, $password)
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `signup` WHERE `email` = '$email' AND `password` = '$password'";

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