<?php
// Include the database connection file
include "datacon.php";

//Obtener valores del form
$foodname = $_POST['foodname'];
$quantity = $_POST['quantity'];
$carbo = $_POST['carbs'];

$sql = "INSERT INTO foods(food_name, quantity, carbohydrates) VALUES ('$foodname', '$quantity', '$carbo')";

echo $sql;

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Navigate back to article list
header("Location: enterFoodView.php");
exit;


?>