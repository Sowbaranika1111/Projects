<?php
require 'db_config.php';
if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];

    // SQL query to delete the record with the given ID
    $delete_query = "DELETE FROM registrationform WHERE id = '$delete_id'";

    if (mysqli_query($conn, $delete_query)) {
        echo "Record with ID $delete_id deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}