<?php
require('db.php');

class EditUser
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function editUsername($userId, $newUsername)
    {
        $query = "UPDATE user SET username = '$newUsername' WHERE id = $userId";
        $result = $this->con->query($query);

        if ($result) {
            echo "Username updated successfully!";
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
    $userId = $_POST["id"];
    $newUsername = $_POST["new_username"];

    $editingUser = new EditUser($con);
    $editingUser->editUsername($userId, $newUsername);
    $editingUser->closeConnection();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Username</title>
    <link rel="stylesheet" href="CSS/shared.css" />
    <link rel="stylesheet" href="CSS/register.css" />
</head>
<body>

<div class="forma">
    <form action="update_user.php" method="post" id="editForm">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" required />
        <div class="error-message" id="userIdError"></div>

        <label for="new_username">New Username:</label>
        <input type="text" id="new_username" name="new_username" required />
        <div class="error-message" id="newUsernameError"></div>

        <button type="submit">Edit User Username</button>
    </form>
</div>

</body>
</html>
