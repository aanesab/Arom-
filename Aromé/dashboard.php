<?php
require('db.php');

class GetAll
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function getProducts()
    {
        $query = "SELECT * FROM products";
        $result = $this->con->query($query);

        return $result;
    }

    public function getUsers()
    {
        $query = "SELECT * FROM user";
        $result = $this->con->query($query);

        return $result;
    }

    public function closeConnection()
    {
        $this->con->close();
    }
}

$gettingAll = new GetAll($con);
$productsResult = $gettingAll->getProducts();
$usersResult = $gettingAll->getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="CSS/shared.css" />
</head>
<body>
<header>
    <div class="headeri">
        <img src="images/logo.png" alt="Logo" />
        <div class="aromé">
            <p>aromé dashboard</p>
        </div>
    </div>
    <ul>
        <li><a href="log_out.php">Log out</a></li>
    </ul>
</header>

<h1>Users</h1>
<a href="add_user.php">Add a User</a>
<a href="update_user.php">Edit User</a>
<a href="delete_user.php">Delete a User</a> | 

<div class="user-container">
    <table style="border-collapse: collapse; border: 3px solid black; width: 100%;">
        <thead>
            <tr>
                <th style="border: 3px solid black;">User ID</th>
                <th style="border: 3px solid black;">Name</th>
                <th style="border: 3px solid black;">Surname</th>
                <th style="border: 3px solid black;">Email</th>
                <th style="border: 3px solid black;">Username</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($userRow = mysqli_fetch_assoc($usersResult)) {
                echo "<tr>";
                echo "<td style='border: 3px solid black;'>" . $userRow['id'] . "</td>";
                echo "<td style='border: 3px solid black;'>" . $userRow['name'] . "</td>";
                echo "<td style='border: 3px solid black;'>" . $userRow['surname'] . "</td>";
                echo "<td style='border: 3px solid black;'>" . $userRow['email'] . "</td>";
                echo "<td style='border: 3px solid black;'>" . $userRow['username'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<br>
<br>
<h1>Products</h1>

<a href="add_product.php">Add a Product</a>
<a href="update_product.php">Edit Product description</a>
<a href="delete_product.php">Delete a Product</a> | 

<div class="product-container">
    <table style="border-collapse: collapse; border: 3px solid black; width: 100%;">
        <thead>
            <tr>
                <th style="border: 3px solid black;">Product ID</th>
                <th style="border: 3px solid black;">Product Name</th>
                <th style="border: 3px solid black;">Product Description</th>
                <th style="border: 3px solid black;">Product Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($productRow = mysqli_fetch_assoc($productsResult)) {
                echo "<tr>";
                echo "<td style='border: 3px solid black;'>" . $productRow['id'] . "</td>";
                echo "<td style='border: 3px solid black;'>" . $productRow['name'] . "</td>";
                echo "<td style='border: 3px solid black;'>" . $productRow['description'] . "</td>";
                echo "<td style='border: 3px solid black;'><img src='images/" . $productRow['image'] . "' alt='" . $productRow['name'] . "' style='width: 50px; height: 50px; object-fit: cover;'></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
