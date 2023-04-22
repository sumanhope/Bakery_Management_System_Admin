<?php
include "db_conn.php";
// Get id of the row to delete
$id = $_GET['id'];

// SQL query to delete row
$sql = "DELETE FROM cakeorder WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: order.php");
    exit;
} else {
    echo "Error deleting row: " . $conn->error;
}
?>
