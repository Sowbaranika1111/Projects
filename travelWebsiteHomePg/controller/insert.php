<?php
include 'db_conn.php';

class User
{
    public static function signup($firstName, $lastName, $email, $password)
    {
        $conn = Database::getConnection();
        $sql = "Insert Into `signup`(`firstName`,`lastName`,`email`,`password`)
        Values('$firstName','$lastName','$email',$password)";
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

    public static function login($email, $password)
    {
        $conn = Database::getConnection();

        // Query to select user with the given email and password
        $sql = "SELECT * FROM `signup` WHERE `email` = '$email' AND `password` = '$password'";

        try {
            $result = $conn->query($sql);

            if (!$result) {
                throw new Exception("Error: " . $conn->error);
            }

            // Check if any row was returned
            if ($result->num_rows > 0) {
                // User found, return true
                // print("login success");
                return true;
            } else {
                // No user found with the provided credentials, return false
                return false;
            }
        } catch (Exception $e) {
            // Log the error instead of echoing it
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
}
