<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- ======== Swiper Js ======= -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css" />

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles.css" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="/webproj/images/logo.png" type="image/png" />
  <title>Niranjan</title>
</head>

<body>

  <!-- Navigation -->
  <?php
  include "./components/nav.php";
  ?>

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main row">
          <div class="swiper-container slider-4">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./images/product-1.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/product-2.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/product-3.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/product-1.jpg" alt="" />
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
        <!-- <div class="thumbnails">
          <div class="thumbnail">
            <img src="./images/product-2.jpg" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/product-3.jpg" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/product-4.jpg" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/product-5.jpg" alt="" />
          </div>
        </div> -->
        <!-- Carousel Navigation -->
        <!-- <div class="arrows d-flex">
          <div class="swiper-prev d-flex">
            <i class="bx bx-chevrons-left swiper-icon"></i>
          </div>
          <div class="swiper-next d-flex">
            <i class="bx bx-chevrons-right swiper-icon"></i>
          </div>
        </div> -->
      </div>
      <div class="right">
        <span>Hair care</span>
        <h1>Shampoo</h1>
        <div style="display: flex; flex-direction:row">
          <div class="price">₹50</div>
          <div class="prevPrice">₹50</div>
        </div>
        <!-- <form>
          <div>
            <select>
              <option value="Select Quantity" selected disabled>
                Select Quantity
              </option>
              <option value="1">32</option>
              <option value="2">42</option>
              <option value="3">52</option>
              <option value="4">62</option>
            </select>
            <span><i class="fas fa-chevron-down"></i></span>
          </div>
        </form> -->

        <form class="form">
          <input type="number" placeholder="1" />
          <a href="cart.php" class="addCart">Add To Cart</a>
        </form>
        <h3>Product Detail</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero minima
          delectus nulla voluptates nesciunt quidem laudantium, quisquam
          voluptas facilis dicta in explicabo, laboriosam ipsam suscipit!
        </p>
      </div>
    </div>
  </section>

  <!-- Related Products -->

  <section class="section related-products">
    <div class="title">
      <h2>Related Products</h2>
      <span>Select from the premium product brands and save plenty money</span>
    </div>
    <div class="product-layout container">
      <div class="product">
        <div class="img-container">
          <img src="./images/product-1.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>₹150</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <img src="./images/product-2.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>₹150</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <img src="./images/product-3.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>₹150</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <img src="./images/product-4.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>₹150</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php

  include "./components/footer.php";

  ?>
  <!-- End Footer -->

  <!-- Custom Scripts -->
  <script src="./js/index.js"></script>
  <script type="text/javascript">
    window.addEventListener('load', (event) => {
      const swiper4 = new Swiper(".slider-4", {
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        grabCursor: true,
        effect: "fade",
        loop: true,
        navigation: {
          nextEl: ".swiper-next",
          prevEl: ".swiper-prev",
        },
      });
    })
  </script>
</body>

</html>