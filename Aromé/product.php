<?php
require('db.php');

class GetProduct
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function getProductById($id)
    {
        $query = "SELECT * FROM products WHERE id = $id";
        $result = $this->con->query($query);

        return $result->fetch_assoc();
    }

    public function closeConnection()
    {
        $this->con->close();
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $gettingProduct = new GetProduct($con);
    $product = $gettingProduct->getProductById($id);
    $gettingProduct->closeConnection();
} else {
    
    header("Location: items.php");
    exit();
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
    <link rel="stylesheet" href="CSS/product.css" />
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
        <li><a href="register.php">Join us</a></li>
      </ul>
    </header>
    <main>
    <div class="product-page">
        <div class="product-image">
            <img src="images/<?php echo $product['image']; ?>" alt="Product Image" />
        </div>

        <div class="product-info">
            <h2><?php echo $product['name']; ?></h2>
            <p><?php echo $product['description']; ?></p>

           

            <div class="rating-box">
                <p style="font-weight: bold">Rated overall: 4.5 / 5</p>
                <p style="font-size: 12px">
                    Soon available for preorder!
                </p>
            </div>

            <div class="more_information">
                <p>
                    For other options, head on over to our
                    <a href="items.php">Products page</a>
                </p>
            </div>
          </div>
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
  </body>
</html>
