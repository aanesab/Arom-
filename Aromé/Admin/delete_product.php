<?php
require('db.php');

class DeleteProduct
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM products WHERE id = $id";
        $result = $this->con->query($query);

        if ($result) {
            echo "Product deleted successfully!";
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
    $id = $_POST["id"];

    $deletingProduct = new DeleteProduct($con);
    $deletingProduct->deleteProduct($id);
    $deletingProduct->closeConnection();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <link rel="stylesheet" href="CSS/shared.css" />
    <link rel="stylesheet" href="CSS/register.css" />
</head>
<body>

<div class="forma">
    <form action="delete_product.php" method="post" id="deleteForm">
        <label for="id">Product ID:</label>
        <input type="text" id="id" name="id" required />
        <div class="error-message" id="productIdError"></div>

        <button type="submit">Delete Product</button>
    </form>
</div>

</body>
</html>
