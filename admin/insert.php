<?php
include "db_conn.php";

$username =$_POST['name'];
$date = $_POST['date'];
$cake=$_POST['cake'];
$price = $_POST['price'];


$sql = "INSERT INTO cakeorder(`user`, `dateorder`, `cake`, `price`) VALUES('$username','$date','$cake','$price')";
if ($conn->query($sql) === TRUE) {
    header("Location: order.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>