<?php
session_start();
require('db.php');

class UserLogin {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function loginUser($email, $password) {
       
        if (strpos($email, '@arome.com') !== false) {
            $this->redirectUserToDashboard();
            return;
        }

        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = $this->con->query($sql);

        if ($result->num_rows > 0) {
          
          $userData = $result->fetch_assoc();
          
          

          
          setcookie("name", $userData['name'], time() + (86400 * 30), "/");
          setcookie("surname", $userData['surname'], time() + (86400 * 30), "/");
          setcookie("email", $userData['email'], time() + (86400 * 30), "/");

          echo "Login successful!";
      } else {
          echo "Invalid credentials. Please check your email and password.";
      }
  }


    private function redirectUserToDashboard() {
        header("Location: dashboard.php");
        exit();
    }

    public function closeConnection() {
        $this->con->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $userLogin = new UserLogin($con);
    $userLogin->loginUser($email, $password);
    $userLogin->closeConnection();
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AromÃ©</title>
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
    <link rel="stylesheet" href="CSS/log_in.css" />
  </head>
  <body>
    <header>
      <div class="headeri">
        <img src="images/logo.png" alt="Logo" />
        <div class="aromÃ©">
          <p>
            <a href="home.php" style="text-decoration: none; color: #363a4f"
              >aromé</a>
          </p>
        </div>
      </div>
      <ul>
        <li><a href="items.php">Products</a></li>
        <li><a href="about_us.php">About us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Join us</a></li>
      </ul>
    </header>
    <main>
      <div class="forma_titull">
        <h2>Log back in</h2>
      </div>

      <div class="forma">
        <form action="log_in.php" method="post" id="myForm">
          <label>Username:</label>
          <input type="text" id="username" name="username" required />
          <div class="error-message" id="usernameError"></div>

          <label>Email:</label>
          <input type="email" id="email" name="email" required />
          <div class="error-message" id="emailError"></div>

          <label>Password:</label>
          <input type="password" id="password" name="password" required />
          <div class="error-message" id="passwordError"></div>

          <p style="color: #46506e; font-size: 14px">
            Don't have an account?
            <a href="register.php" style="text-decoration: none">Register</a>
          </p>

          <button type="submit" onclick="validateForm()">Login</button>
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
          <p>Email: aromÃ©store@gmail.com</p>
        </div>
        <div class="footerright">
          <p>Terms of use licensed</p>
          <p>Privacy Policy protected</p>
        </div>
      </div>
      <div class="fundi">
        <p>Â© 2023 AromÃ© KS. All rights reserved.</p>
      </div>
    </footer>

      <script>
      let usernameRegex = /^[A-Za-z][a-z]{2,12}$/;
      let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      let passwordRegex = /^.{8,20}$/;

      function validateForm() {
        let usernameInput = document.getElementById("username");
        let usernameError = document.getElementById("usernameError");
        let emailInput = document.getElementById("email");
        let emailError = document.getElementById("emailError");
        let passwordInput = document.getElementById("password");
        let passwordError = document.getElementById("passwordError");

        usernameError.innerText = "";
        emailError.innerText = "";
        passwordError.innerText = "";

        if (!usernameRegex.test(usernameInput.value)) {
          usernameError.innerText = "invalid username";
          return;
        }
        if (!emailRegex.test(emailInput.value)) {
          emailError.innerText = "invalid email";
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