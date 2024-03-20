<?php

include("db_conn.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

$id = $_GET["id"];

try {
    $conn = Database::getConnection();
    $delQuery = "DELETE FROM signup WHERE id = '$id'";
    $stmt = $conn->prepare($delQuery);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Deleted successfully')</script>";
?>
        <meta http-equiv="refresh" content="2; url = http://localhost/bootstrap/travelWebsiteHomePg/display.php" />
    <?php
    } else {
        echo "<script>alert('Not Deleted ')</script>";
    ?>
        <meta http-equiv="refresh" content="2; url = http://localhost/bootstrap/travelWebsiteHomePg/display.php" />
<?php
    }
} catch (PDOException $e) {
    error_log("Error: " . $e->getMessage());
    echo 'Could not delete';
}

?>