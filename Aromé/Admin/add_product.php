<?php
require('db.php');

class AddProduct{
  private $con;

  public function  __construct($con){
    $this->con = $con;
}

public function addProduct($image, $name, $description) {

$sql = "INSERT INTO products (image, name, description) 
VALUES ('$image','$name','$description')";


  if ($this->con->query($sql) == TRUE) {
      echo "Your product is added!";
  } else {
    echo "Oops something went wrong" . $this->con->error;
  }

  }
public function closeConnection() {
  $this->con->close();
} 
}

  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $image = $_POST["image"];
  $name = $_POST["name"];
  $description = $_POST["description"];
  
  $addingProducts = new AddProduct($con);
  $addingProducts->addProduct($image, $name, $description);
  $addingProducts->closeConnection();
  
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <link rel="stylesheet" href="CSS/shared.css" />
  <link rel="stylesheet" href="CSS/register.css" />
</head>
<body>

<div class="forma">
        <form action="add_product.php" method="post" id="myForm">
          <label for="name">Image:</label>
          <input type="file" id="image" name="image" required />
          <div class="error-message" id="nameError"></div>

          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />
          <div class="error-message" id="surnameError"></div>

          <label for="description">Description:</label>
          <textarea id="description" name="description" rows="4" required></textarea>

          <button type="submit">Add product</button>
        </form>
      </div>
  
</body>
</html>