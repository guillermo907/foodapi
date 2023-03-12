<?php
include "datacon.php";

// Get food data from USDA National Nutrient Database
$api_url = 'https://api.nal.usda.gov/fdc/v1/foods/search?api_key=QSR7EaTyZcP2qGu96qER9u2UrlRn78Ya0kOignpe&pageSize=1000';
$json = file_get_contents($api_url);
$data = json_decode($json, true);

// Insert food data into the database
foreach ($data['foods'] as $food) {
    $food_name = mysqli_real_escape_string($conn, $food['description']);
    $quantity = 100 gr;
    $carbohydrates = isset($food['foodNutrients'][3]['value']) ? $food['foodNutrients'][3]['value'] : 0; // Carbohydrates are in the 4th position of the array

    $query = "INSERT INTO foods (food_name, quantity, carbohydrates) VALUES ('$food_name', '$quantity', '$carbohydrates')";
    mysqli_query($conn, $query);
    
    echo 'Inserted data for: ' . $food_name . '<br>';
}
?>
