<?php 
require('db.php');

class UserRegistration {
  private $con;

  public function __construct($con) {
      $this->con = $con;
  }

  public function RegisterUser($name,$surname , $password, $email, $username) {

    if (!preg_match('/^.{8,}$/', $password)) {
      echo "Password must contain at least 8 characters!";
      return;
  }

  if (!preg_match('/^.{4,}$/', $name)) {
      echo "Username must contain at least 4 characters!";
      return;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email address!";
      return;
  }


  $sql = "INSERT INTO user (name, surname, email, username, password) 
  VALUES ('$name', '$surname','$email','$username', '$password')";


    if ($this->con->query($sql) == TRUE) {
        echo "You are now a member of our site, have fun!";
    } else {
        echo "Oops something happened: " . $this->con->error;
    }
}

public function closeConnection() {
    $this->con->close();
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$userRegister = new UserRegistration($con);
$userRegister->RegisterUser($name,$surname , $password, $email, $username);
$userRegister->closeConnection();

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
        <form action="add_user.php" method="post" id="myForm">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />
          <div class="error-message" id="nameError"></div>

          <label for="surname">Surname:</label>
          <input type="text" id="surname" name="surname" required />
          <div class="error-message" id="surnameError"></div>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
          <div class="error-message" id="emailError"></div>

          <label for="username">Username:</label>
          <input type="username" id="username" name="username" required />
          <div class="error-message" id="usernameError"></div>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
          <div class="error-message" id="passwordError"></div>

          <button type="submit">Add User</button>
        </form>
      </div>
</body>
</html>