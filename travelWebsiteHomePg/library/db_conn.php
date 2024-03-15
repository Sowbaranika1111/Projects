<?php
class Database
{
    public static $conn = null;

    public static function getConnection()
    {
        if (Database::$conn == null){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "";

            // Create connection
            $connection = new mysqli($servername,$username,$password,$db_name);

            // Check connection 
            if ($connection -> connect_error)
            {
                die("Connection failed! ".$connection -> connect_error);
            }
            else
            {
                Database::$conn = $connection;
                return Database::$conn;
            }
        }
    }
}
?>