<?php

include("db_conn.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

$id = $_GET["id"];

try {
    $conn = Database::getConnection();
    $delQuery = "DELETE FROM adminData WHERE id = '$id'";
    $stmt = $conn->prepare($delQuery);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Deleted successfully')</script>";
        echo "<script>window.location.href = 'admin_display.php';</script>";
        exit();
    } else {
        echo "<script>alert('Not Deleted ')</script>";
        echo "<script>window.location.href = 'admin_display.php';</script>";

    }
} catch (PDOException $e) {
    error_log("Error: " . $e->getMessage());
    echo 'Could not delete';
}

?>