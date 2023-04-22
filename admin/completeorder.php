<?php
include "db_conn.php";
function deleteorder($conn, $id)
{
    $sql = "DELETE FROM cakeorder WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: sales.php");
        exit;
    } else {
        echo "Error deleting row: " . $conn->error;
    }
}
// Get id of the row to delete
$id = $_GET['id'];

// SQL query to delete row
$sql = "SELECT * FROM cakeorder WHERE id = $id";
$result = $conn->query($sql);

// Check if row exists
if ($result->num_rows > 0) {
    // Loop through the data and store it in variables
    while ($row = $result->fetch_assoc()) {
        $username = $row["user"];
        $dateorder = $row["dateorder"];
        $cake = $row["cake"];
        $price = $row["price"];
        // ... and so on for other columns in the table
    }
} else {
    echo "0 results";
}

$newsql = "INSERT INTO sales(`username`, `dateorder`, `cake`, `price`) VALUES('$username','$dateorder','$cake','$price')";
if ($conn->query($newsql) === TRUE) {
    deleteorder($conn,$id);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
