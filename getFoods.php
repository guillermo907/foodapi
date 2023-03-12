<?php
// Include the database connection file
include "datacon.php";

// Retrieve data from the table
$sql = "SELECT * FROM foods";
$result = mysqli_query($conn, $sql);

// Create an array to store the data
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Output the data in JSON format
echo json_encode($data);

?>