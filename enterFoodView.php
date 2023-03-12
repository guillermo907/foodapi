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
    <h1>Nuevo Articulo</h1>
    <form
      method="post"
      action="enterFood.php"
      enctype="multipart/form-data"
      class="nuevo-articulo-form"
    >
    <div class="field">
      <label for="title">Food Name:</label>
      <input class="ninput-field" type="text" name="foodname" placeholder="tortilla de harina" required />
    </div>
      <div class="field">
        <label for="body">Quantity:</label>
        <input class="ninput-field" type="text" placeholder="1 pz" name="quantity" required />
      </div>
      <div class="field">
        <label for="author">Carbohidratos:</label>
        <input class="ninput-field" type="text" name="carbs" placeholder="35" required />
      </div>
      <input type="submit" value="Save" class="submit-btn save" />
    </form>
    <a href="viewFoods.php"><button class="submit-btn nav-btn box-shadow">See Foodlist </button> </a>
  </body>
</html>