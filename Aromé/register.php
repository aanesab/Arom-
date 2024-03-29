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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aromé</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Be+Vietnam+Pro:wght@400;500;700&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400;0,6..96,500;1,6..96,400;1,6..96,500;1,6..96,600&family=Bungee+Hairline&family=DM+Serif+Display&family=Lato:wght@300;400&family=Montserrat:wght@300;400&family=Open+Sans:wght@400;500&family=Playball&family=Playfair+Display&family=Playfair+Display+SC:ital@0;1&family=Roboto:wght@300;400&family=Unica+One&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="CSS/shared.css" />
    <link rel="stylesheet" href="CSS/register.css" />
  </head>
  <body>
    <header>
      <div class="headeri">
        <img src="images/logo.png" alt="Logo" />
        <div class="aromé">
          <p>
            <a href="home.php" style="text-decoration: none; color: #363a4f"
              >aromé</a
            >
          </p>
        </div>
      </div>
      <ul>
        <li><a href="items.php">Products</a></li>
        <li><a href="about_us.php">About us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="">Join us</a></li>
      </ul>
    </header>
    <main>
      <div class="forma_titull">
        <h2>Join our family</h2>
      </div>

      <div class="forma">
        <form action="register.php" method="post" id="myForm">
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

          <p style="color: #46506e; font-size: 14px">
            Already have an account?
            <a href="log_in.php" style="text-decoration: none">Log in</a>
          </p>

          <button type="submit" onclick="validateForm()">Register</button>
        </form>
      </div>
    </main>
    <footer>
      <div class="f">
        <h3>Get in touch</h3>
        <div class="ff">
          <a href="https://www.facebook.com/"
            ><img src="icons/facebook.svg" alt=""
          /></a>
          <a href="https://www.pinterest.com/"
            ><img src="icons/pinterest.svg" alt=""
          /></a>
          <a href="https://twitter.com/"
            ><img src="icons/twitter.svg" alt=""
          /></a>
          <a href="https://www.youtube.com/"
            ><img src="icons/youtube.svg" alt=""
          /></a>
        </div>
      </div>
      <div class="footermain">
        <div class="footerleft">
          <p>Numri kontaktues:</p>
          <p>+383 44 121 232</p>
          <p>Email: aroméstore@gmail.com</p>
        </div>
        <div class="footerright">
          <p>Terms of use licensed</p>
          <p>Privacy Policy protected</p>
        </div>
      </div>
      <div class="fundi">
        <p>© 2023 Aromé KS. All rights reserved.</p>
      </div>
    </footer>

    <script>
      let nameRegex = /^[A-Z][a-z]{3,8}$/;
      let surnameRegex = /^[A-Z][a-z]{3,12}$/;
      let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
      let usernameRegex = /^[a-zA-Z0-9_]{4,12}$/;
      let passwordRegex = /^.{8,20}$/;

      function validateForm() {
        let nameInput = document.getElementById("name");
        let nameError = document.getElementById("nameError");
        let surnameInput = document.getElementById("surname");
        let surnameError = document.getElementById("surnameError");
        let emailInput = document.getElementById("email");
        let emailError = document.getElementById("emailError");
        let usernameError = document.getElementById("usernameError");
        let passwordInput = document.getElementById("password");
        let passwordError = document.getElementById("passwordError");

        nameError.innerText = "";
        surnameError.innerText = "";
        emailError.innerText = "";
        userError.innerText = "";
        passwordError.innerText = "";

        if (!nameRegex.test(nameInput.value)) {
          nameError.innerText = "invalid name";
          return;
        }
        if (!surnameRegex.test(surnameInput.value)) {
          surnameError.innerText = "invalid surname";
          return;
        }
        if (!emailRegex.test(emailInput.value)) {
          emailError.innerText = "invalid email";
          return;
        }
        if (!userRegex.test(userInput.value)) {
          userError.innerText = "invalid user";
          return;
        }
        if (!passwordRegex.test(passwordInput.value)) {
          passwordError.innerText = "invalid password";
          return;
        }

        alert("form submitted succesfully!");
      }
    </script>
  </body>
</html>
