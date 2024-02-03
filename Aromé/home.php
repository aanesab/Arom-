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
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="CSS/items.css">
  </head>
  <body>
    <header>
      <div class="headeri">
        <img src="images/logo.png" alt="Logo" />
        <div class="aromé">
          <p>aromé</p>
        </div>
      </div>
      <ul>
      <li style="padding-right: 10px;"><a href="items.php">Products</a></li>
        <li style="padding-right: 10px;"><a href="about_us.php">About us</a></li>
        <li style="padding-right: 10px;"><a href="contact.php">Contact</a></li>
        <li style="padding-right: 10px;"><a href="register.php">Join</a></li>
        <li style="padding-right: 5px;"><a href="log_out.php">Log out</a></li>
      </ul>
    </header>
    <main>
      <div class="quote">
        <p>
          Scents, the intercessor of your childhood, fantasy and intimacy...
          Your imaginary aroma.
        </p>
      </div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/pexels-mart-production-8450228.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="images/pexels-mart-production-8450508.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="images/pexels-anna-shvets-5760878.jpg" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="advertising">
        <img src="images/slide-foto1.jpg" alt="A perfume" />
        <div class="advertising_text">
          <h2>Nothing is more memorable than a smell!</h2>
          <p>Mix and match to find the scent that makes you, YOU!</p>
          <button class="buttoni">
            <a href="items.php" style="text-decoration: none; color: black"
              >Products guide</a
            >
          </button>
        </div>
      </div>

      <div class="product-container">
        <div class="product-box">
          <img
            src="images/perfumed_oil.png"
            alt="N°3- Vanilla pure perfume essence"
          />
          <h3>N°3 <br> Vanilla Bahiana</h3>
          <p>Pure perfume essence  <br> 16ml</p>
          <button class="view-button">
            <a href="product.php">View Product</a>
          </button>
        </div>

        <div class="product-box">
          <img
            src="images/perfume_spray.png"
            alt="Luna - Coconut fragrance mist"
          />
          <h3>Luna <br> Coconut Nectar</h3>
          <p>Fragrance mist <br> 100ml</p>
          <button class="view-button">
            <a href="product.php">View Product</a>
          </button>
        </div>

        <div class="product-box">
          <img
            src="images/big_tube.png"
            alt="Luna - Sour cherry fragrance enhancing cream"
          />
          <h3>Luna <br> Sour Cherry</h3>
          <p>Fragrance enhancing cream <br> 80ml</p>
          <button class="view-button">
            <a href="product.php">View Product</a>
          </button>
        </div>

        <div class="product-box">
          <img src="images/body_butter.png" alt="Luna - Iris Palida fragrance body butter" />
          <h3>Luna <br> Iris Palida</h3>
          <p>Fragrance body butter <br> 125g</p>
          <button class="view-button">
            <a href="product.php">View Product</a>
          </button>
        </div>
      </div>

      <div class="maincontainer">
        <div class="thecard">
          <div class="thefront">
            <h3>Psst... look down here</h3>
            <p>Theres a hint waiting just for you</p>
          </div>

          <div class="theback">
            <h3>Smell good all day, everyday</h3>
            <p>Head on over to our Products page to see more of our products</p>
          </div>
        </div>
      </div>

      <div class="paragrafi">
        <p>
          "Embark on a sensorial journey with our curated perfumes, each a blend
          of the finest ingredients. From vibrant florals to exotic spices, our
          scents evoke luxury and elegance. Explore the alchemy of our perfume
          ingredients, where passion meets craftsmanship. Discover your
          signature scent, a symphony of notes resonating with individuality and
          style."
        </p>
      </div>

      <div class="review_space">
        <h2>Top reviews</h2>
        <div class="review_boxes">
          <div class="review">
            <img src="images/portrait_1.jpg" alt="Portrait 1" />
            <h4>Outsanding!</h4>
            <p>I was left very pleased with the variety of choices.</p>
          </div>
          <div class="review">
            <img src="images/portrait_2.jpg" alt="Portrait 2" />
            <h4>This helped a lot</h4>
            <p>Now i know more about what scents I like.</p>
          </div>
          <div class="review">
            <img src="images/portrait_3.jpg" alt="Portrait 3" />
            <h4>Great!</h4>
            <p>Theres a lot of amazing information here.</p>
          </div>
          <div class="review">
            <img src="images/portrait_4.jpg" alt="Portrait 4" />
            <h4>Quite cool</h4>
            <p>There sure are some fantastic stuff here.</p>
          </div>
        </div>
      </div>

      <div class="login_shortcut">
        <img src="images/pexels-mart-production-8450232.jpg" alt="A perfume" />
        <div class="login_shortcut_text">
          <h2>Become a part of our family</h2>
          <div class="pranimi">
            <div class="joining">
              <p>Join us by registering</p>
              <button class="buttons">
                <a href="register.php">Register</a>
              </button>
            </div>
            <div class="joining">
              <p>Already have an account?</p>
              <button class="buttons"><a href="log_in.php">Log in</a></button>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>
