<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alimentos";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create table
    $sql = "CREATE TABLE IF NOT EXISTS foods (
       id INT AUTO_INCREMENT PRIMARY KEY,
        food_name VARCHAR(255) NOT NULL,
        quantity VARCHAR(255) NOT NULL,
        carbohydrates DECIMAL(10,2) NOT NULL
    )";

    if(!mysqli_query($conn, $sql)){
        echo "Error creating table: " . mysqli_error($conn);
    }

?>