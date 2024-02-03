<?php
require('db.php');

class EditProduct
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function editProductDescription($productId, $newDescription)
    {
        $query = "UPDATE products SET description = '$newDescription' WHERE id = $productId";
        $result = $this->con->query($query);

        if ($result) {
            echo "Product description updated successfully!";
        } else {
            echo "Oops, something went wrong: " . $this->con->error;
        }
    }

    public function closeConnection()
    {
        $this->con->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["id"];
    $newDescription = $_POST["new_description"];

    $editingProduct = new EditProduct($con);
    $editingProduct->editProductDescription($productId, $newDescription);
    $editingProduct->closeConnection();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Description</title>
    <link rel="stylesheet" href="CSS/shared.css" />
    <link rel="stylesheet" href="CSS/register.css" />
</head>
<body>

<div class="forma">
    <form action="update_product.php" method="post" id="editForm">
        <label for="id">Product ID:</label>
        <input type="text" id="id" name="id" required />
        <div class="error-message" id="productIdError"></div>

        <label for="new_description">New Description:</label>
        <textarea id="new_description" name="new_description" rows="4" required></textarea>

        <button type="submit">Edit Product Description</button>
    </form>
</div>

</body>
</html>
