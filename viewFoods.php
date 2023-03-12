<!DOCTYPE html>
<html lang="es">
  <head>
    <style></style>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <title>Document</title>
  </head>
  <body class="admin">
    <h1>Foods</h1>
    <?php 
        include "getfoods.php";
    ?>
    <a href="enterFoodView.php"><button class="submit-btn nav-btn box-shadow"> Enter new food </button> </a>
  </body>
</html>